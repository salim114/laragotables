<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Pipelining data to reduce Ajax calls for paging</title>
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">
	
	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/1.11.5/dataRender/datetime.js"></script>
	<script type="text/javascript" language="javascript" class="init">	

	// Pipelining function for DataTables. To be used to the `ajax` option of DataTables

	$.fn.dataTable.pipeline = function ( opts ) {
		// Configuration options
		var conf = $.extend( {
			pages: 5,     // number of pages to cache
			url: '',      // script url
			data: null,   // function or object with parameters to send to the server
			              // matching how `ajax.data` works in DataTables
			method: 'GET' // Ajax HTTP method
		}, opts );

		// Private variables for storing the cache
		var cacheLower = -1;
		var cacheUpper = null;
		var cacheLastRequest = null;
		var cacheLastJson = null;

		return function ( request, drawCallback, settings ) {
			var ajax          = false;
			var requestStart  = request.start;
			var drawStart     = request.start;
			var requestLength = request.length;
			var requestEnd    = requestStart + requestLength;
			
			if ( settings.clearCache ) {
				// API requested that the cache be cleared
				ajax = true;
				settings.clearCache = false;
			}
			else if ( cacheLower < 0 || requestStart < cacheLower || requestEnd > cacheUpper ) {
				// outside cached data - need to make a request
				ajax = true;
			}
			else if ( JSON.stringify( request.order )   !== JSON.stringify( cacheLastRequest.order ) ||
			          JSON.stringify( request.columns ) !== JSON.stringify( cacheLastRequest.columns ) ||
			          JSON.stringify( request.search )  !== JSON.stringify( cacheLastRequest.search )
			) {
				// properties changed (ordering, columns, searching)
				ajax = true;
			}
			
			// Store the request for checking next time around
			cacheLastRequest = $.extend( true, {}, request );

			if ( ajax ) {
				// Need data from the server
				if ( requestStart < cacheLower ) {
					requestStart = requestStart - (requestLength*(conf.pages-1));

					if ( requestStart < 0 ) {
						requestStart = 0;
					}
				}
				
				cacheLower = requestStart;
				cacheUpper = requestStart + (requestLength * conf.pages);

				request.start = requestStart;
				request.length = requestLength*conf.pages;

				// Provide the same `data` options as DataTables.
				if ( typeof conf.data === 'function' ) {
					// As a function it is executed with the data object as an arg
					// for manipulation. If an object is returned, it is used as the
					// data object to submit
					var d = conf.data( request );
					if ( d ) {
						$.extend( request, d );
					}
				}
				else if ( $.isPlainObject( conf.data ) ) {
					// As an object, the data given extends the default
					$.extend( request, conf.data );
				}

				return $.ajax( {
					"type":     conf.method,
					"url":      conf.url,
					"data":     request,
					"dataType": "json",
					"cache":    false,
					"success":  function ( json ) {
						cacheLastJson = $.extend(true, {}, json);

						if ( cacheLower != drawStart ) {
							json.data.splice( 0, drawStart-cacheLower );
						}
						if ( requestLength >= -1 ) {
							json.data.splice( requestLength, json.data.length );
						}
						
						drawCallback( json );
					}
				} );
			}
			else {
				json = $.extend( true, {}, cacheLastJson );
				json.draw = request.draw; // Update the echo for each response
				json.data.splice( 0, requestStart-cacheLower );
				json.data.splice( requestLength, json.data.length );

				drawCallback(json);
			}
		}
	};

	// Register an API method that will empty the pipelined data, forcing an Ajax
	// fetch on the next draw (i.e. `table.clearPipeline().draw()`)
	$.fn.dataTable.Api.register( 'clearPipeline()', function () {
		return this.iterator( 'table', function ( settings ) {
			settings.clearCache = true;
		} );
	} );


	//
	// DataTables initialisation
	//
	$(document).ready(function() {
		$('#example').DataTable( {
			"processing": true,
			"serverSide": true,
			"ajax": $.fn.dataTable.pipeline( {
				url: "{{ route('pipeline') }}",
				pages: 5 // number of pages to cache
			} ),
			columns: [
	            {data: 'first_name', name: 'first_name'},
	            {data: 'last_name', name: 'last_name'},
	            {data: 'position', name: 'email'},
	            {data: 'office', name: 'office'},
	            {data: 'start_date',  
	            render: $.fn.dataTable.render.moment('', 'Do MMM YY')
	            },  
	            {data: 'salary', 
	            render: $.fn.dataTable.render.number( ',', '.', 0, '$' )
	        	}
			] 
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Pipelining data to reduce Ajax calls for paging</span></h1>
			<div class="info">
				<p>Server-side processing can be quite hard on your server, since it makes an Ajax call to the server for every draw request that is made. On sites with a large
				number of page views, you could potentially end up DDoSing your own server with your own applications!</p>
				<p>This example shows one technique to reduce the number of Ajax calls that are made to the server by caching more data than is needed for each draw. This is done
				by intercepting the Ajax call and routing it through a data cache control; using the data from the cache if available, and making the Ajax request if not. This
				intercept of the Ajax request is performed by giving the <a href="//datatables.net/reference/option/ajax"><code class="option" title=
				"DataTables initialisation option">ajax</code></a> option as a function. This function then performs the logic of deciding if another Ajax call is needed, or if
				data from the cache can be used.</p>
				<p>Keep in mind that this caching is for paging only; the pipeline must be cleared for other interactions such as ordering and searching since the full data set,
				when using server-side processing, is only available at the server.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>First name</th>
							<th>Last name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>First name</th>
							<th>Last name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<ul class="tabs">
				<li class="active">Javascript</li>
				<li>HTML</li>
				<li>CSS</li>
				<li>Ajax</li>
				<li>Server-side script</li>
				<li>Route</li>
				<li>Controller</li>
				<li>Model</li>
			</ul>
			<div class="tabs">
				<div class="js">
					<p>The Javascript shown below is used to initialise the table shown in this example:</p>
					<code class="multiline language-js">
						//
						// Pipelining function for DataTables. To be used to the `ajax` option of DataTables
						//
						$.fn.dataTable.pipeline = function ( opts ) {
							// Configuration options
							var conf = $.extend( {
								pages: 5,     // number of pages to cache
								url: '',      // script url
								data: null,   // function or object with parameters to send to the server
								              // matching how `ajax.data` works in DataTables
								method: 'GET' // Ajax HTTP method
							}, opts );

							// Private variables for storing the cache
							var cacheLower = -1;
							var cacheUpper = null;
							var cacheLastRequest = null;
							var cacheLastJson = null;

							return function ( request, drawCallback, settings ) {
								var ajax          = false;
								var requestStart  = request.start;
								var drawStart     = request.start;
								var requestLength = request.length;
								var requestEnd    = requestStart + requestLength;
								
								if ( settings.clearCache ) {
									// API requested that the cache be cleared
									ajax = true;
									settings.clearCache = false;
								}
								else if ( cacheLower &lt; 0 || requestStart &lt; cacheLower || requestEnd &gt; cacheUpper ) {
									// outside cached data - need to make a request
									ajax = true;
								}
								else if ( JSON.stringify( request.order )   !== JSON.stringify( cacheLastRequest.order ) ||
								          JSON.stringify( request.columns ) !== JSON.stringify( cacheLastRequest.columns ) ||
								          JSON.stringify( request.search )  !== JSON.stringify( cacheLastRequest.search )
								) {
									// properties changed (ordering, columns, searching)
									ajax = true;
								}
								
								// Store the request for checking next time around
								cacheLastRequest = $.extend( true, {}, request );

								if ( ajax ) {
									// Need data from the server
									if ( requestStart &lt; cacheLower ) {
										requestStart = requestStart - (requestLength*(conf.pages-1));

										if ( requestStart &lt; 0 ) {
											requestStart = 0;
										}
									}
									
									cacheLower = requestStart;
									cacheUpper = requestStart + (requestLength * conf.pages);

									request.start = requestStart;
									request.length = requestLength*conf.pages;

									// Provide the same `data` options as DataTables.
									if ( typeof conf.data === 'function' ) {
										// As a function it is executed with the data object as an arg
										// for manipulation. If an object is returned, it is used as the
										// data object to submit
										var d = conf.data( request );
										if ( d ) {
											$.extend( request, d );
										}
									}
									else if ( $.isPlainObject( conf.data ) ) {
										// As an object, the data given extends the default
										$.extend( request, conf.data );
									}

									return $.ajax( {
										&quot;type&quot;:     conf.method,
										&quot;url&quot;:      conf.url,
										&quot;data&quot;:     request,
										&quot;dataType&quot;: &quot;json&quot;,
										&quot;cache&quot;:    false,
										&quot;success&quot;:  function ( json ) {
											cacheLastJson = $.extend(true, {}, json);

											if ( cacheLower != drawStart ) {
												json.data.splice( 0, drawStart-cacheLower );
											}
											if ( requestLength &gt;= -1 ) {
												json.data.splice( requestLength, json.data.length );
											}
											
											drawCallback( json );
										}
									} );
								}
								else {
									json = $.extend( true, {}, cacheLastJson );
									json.draw = request.draw; // Update the echo for each response
									json.data.splice( 0, requestStart-cacheLower );
									json.data.splice( requestLength, json.data.length );

									drawCallback(json);
								}
							}
						};

						// Register an API method that will empty the pipelined data, forcing an Ajax
						// fetch on the next draw (i.e. `table.clearPipeline().draw()`)
						$.fn.dataTable.Api.register( 'clearPipeline()', function () {
							return this.iterator( 'table', function ( settings ) {
								settings.clearCache = true;
							} );
						} );


						//
						// DataTables initialisation
						//
						$(document).ready(function() {
							$('#example').DataTable( {
								&quot;processing&quot;: true,
								&quot;serverSide&quot;: true,
								&quot;ajax&quot;: $.fn.dataTable.pipeline( {
									url: &quot;&#123;&#123; route('pipeline') &#125;&#125;&quot;,
									pages: 5 // number of pages to cache
								} ),
								//In the offical documentation the columns data option does not existe in this example,
								//although for the need of server side rendring data under Laravel it is a must
								columns: [
						            {data: 'first_name', name: 'first_name'},
						            {data: 'last_name', name: 'last_name'},
						            {data: 'position', name: 'email'},
						            {data: 'office', name: 'office'},
						            {data: 'start_date',  
						            render: $.fn.dataTable.render.moment('', 'Do MMM YY')
						            },  
						            {data: 'salary', 
						            render: $.fn.dataTable.render.number( ',', '.', 0, '$' )
						        	}
								] 
								//end comment section
							} );
						} );</code>
					<p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>
					<ul>
						<li>
							<a href="https://code.jquery.com/jquery-3.5.1.js">https://code.jquery.com/jquery-3.5.1.js</a>
						</li>
						<li>
							<a href="{{ url('js/jquery.dataTables.js') }}">public/js/jquery.dataTables.js</a>
						</li>
					</ul>
				</div>
				<div class="table">
					<p>The HTML shown below is the raw HTML table element, before it has been enhanced by DataTables:</p>
				</div>
				<div class="css">
					<div>
						<p>This example uses a little bit of additional CSS beyond what is loaded from the library files (below), in order to correctly display the table. The
						additional CSS used is shown below:</p><code class="multiline language-css"></code>
					</div>
					<p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>
					<ul>
						<li>
							<a href="{{ url('css/jquery.dataTables.css') }}">public/css/jquery.dataTables.css</a>
						</li>
					</ul>
				</div>
				<div class="ajax">
					<p>This table loads data by Ajax. The latest data that has been loaded is shown below. This data will update automatically as any additional data is
					loaded.</p>
				</div>
				<div class="php">
					<p>The script used to perform the server-side processing for this table is shown below. Please note that this is just an example script using PHP. Server-side
					processing scripts can be written in any language, using <a href="//datatables.net/manual/server-side">the protocol described in the DataTables
					documentation</a>.</p>
				</div>
				<div id="route" class="route">
					<p>The route shown below may be accessed by entering the defined route's URL in your browser:</p>
					<code class="multiline language-route">
						<&#63;php

						use Illuminate\Support\Facades\Route; 
						use App\Http\Controllers\DatatableController;

						/*
						|--------------------------------------------------------------------------
						| Web Routes
						|--------------------------------------------------------------------------
						|
						| Here is where you can register web routes for your application. These
						| routes are loaded by the RouteServiceProvider within a group which
						| contains the "web" middleware group. Now create something great!
						|
						*/
						
						//Server-side (features)

						Route::group([], function() {
						    
						    Route::get('features/server_side/simple', 'App\Http\Controllers\DatatableController&#64;simple_ss')->name('simple_ss');

						});</code>
					<p>In addition to the above route, the "web.php" file includes all the routes from the other examples (features) which i deliberately hide to keep focus on each features separately.</p>
				</div>
				<div id="controller" class="ctrl">
					<p>The controller shown below is used to defining all of your request handling logic you may wish to organize seperetly from your route files:</p>
					<code class="multiline language-ctrl">
						<&#63;php

						namespace App\Http\Controllers;

						use Illuminate\Http\Request;
						Use App\Models\Datatable;
						use DataTables;

						class DatatableController extends Controller
						{
						    /**
						     * Display a listing of the resource.
						     *
						     * &#64;return \Illuminate\Http\Response
						     */

					    //Server-side (features)

					    public function simple_ss(Request $request)
					    {
					         if ($request->ajax()) {
					            $datatables = Datatable::all();
					            return Datatables::of($datatables)
					                ->make(true);
					        }

					        return view('features.server_side.simple');
					    }  </code>
					<p>In addition to the above code, the "DatatableController.php" file includes all classes from the other examples (features) which i deliberately hide to keep focus on each features separately.</p>
					</div>
				<div id="model" class="model">
					<p>Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table:</p>
					<code class="multiline language-model">
						<&#63;php

						namespace App\Models;

						use Illuminate\Database\Eloquent\Factories\HasFactory;
						use Illuminate\Database\Eloquent\Model;

						class Datatable extends Model
						{
						    use HasFactory;

						    protected $fillable = [
						        
						        'id', 'first_name', 'last_name', 'name_abrv', 'position', 'email', 'office', 'start_date_epoch', 
						        'start_date', 'age', 'salary', 'seq', 'extn'
						    ];
						}</code>
					<p>In addition to the above code, the "Datatable.php" file (Model) will manage ,work and support all common relationships with ease.</p>
				</div>
			</div>
		</section>
	</div>
	<section>
		@include('layouts.footer')	
	</section>
</body>
</html>