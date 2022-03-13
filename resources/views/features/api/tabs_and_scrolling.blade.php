<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Scrolling and Bootstrap tabs</title>
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">
	
	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" class="init">

	$(document).ready(function() {
		$('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
			$.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
		} );
		
		$('table.table').DataTable( {
			ajax:           '{{ asset('data/arrays.txt') }}',
			scrollY:        200,
			scrollCollapse: true,
			paging:         false
		} );

		// Apply a search to the second table for the demo
		$('#myTable2').DataTable().search( 'New York' ).draw();
	} );

	</script>
</head>
<body class="dt-example dt-example-bootstrap">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Scrolling and Bootstrap tabs</span></h1>
			<div class="info">
				<p>This example shows how DataTables with scrolling can be used together with <a href="http://getbootstrap.com/javascript/#tabs">Bootstrap tabs</a> (or indeed any
				other method whereby the table is in a hidden, <code>display:none</code>, element when it is initialised).</p>
				<p>The reason this requires special consideration is that when the DataTable is initialised in a hidden element the browser doesn't have any measurements with
				which to give the DataTable, and this will result in the misalignment of columns when scrolling is enabled.</p>
				<p>This misalignment can be corrected by the <a href="//datatables.net/reference/api/columns.adjust()"><code class="api" title=
				"DataTables API method">columns.adjust()</code></a> method when the table is made visible (i.e. it has dimensions).</p>
				<p>This example shows how the Bootstrap <code>shown.bs.tab</code> event can be used to trigger this method call. The visible tables on the page are selected using
				the static <a href="//datatables.net/reference/api/%24.fn.dataTable.tables()"><code class="api" title="DataTables API method">$.fn.dataTable.tables()</code></a>
				method and running the <a href="//datatables.net/reference/api/columns.adjust()"><code class="api" title="DataTables API method">columns.adjust()</code></a> method
				on them.</p>
			</div>
			<div class="demo-html">
				<div>
					<ul class="nav nav-tabs" role="tablist">
						<li class="active">
							<a href="#tab-table1" data-toggle="tab">Table 1</a>
						</li>
						<li>
							<a href="#tab-table2" data-toggle="tab">Table 2</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab-table1">
							<table id="myTable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Extn.</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tab-pane" id="tab-table2">
							<table id="myTable2" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Extn.</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
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
						$(document).ready(function() {
							$('a[data-toggle=&quot;tab&quot;]').on( 'shown.bs.tab', function (e) {
								$.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
							} );
							
							$('table.table').DataTable( {
								ajax:           &quot;&#123;&#123; asset('data/arrays.txt') &#125;&#125;&quot;
								scrollY:        200,
								scrollCollapse: true,
								paging:         false
							} );

							// Apply a search to the second table for the demo
							$('#myTable2').DataTable().search( 'New York' ).draw();
						} );</code>
					<p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>
					<ul>
						<li>
							<a href="https://code.jquery.com/jquery-3.5.1.js">https://code.jquery.com/jquery-3.5.1.js</a>
						</li>
						<li>
							<a href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js</a>
						</li>
						<li>
							<a href="{{ url('js/jquery.dataTables.js') }}">public/js/jquery.dataTables.js</a>
						</li>
						<li>
							<a href="{{ url('js/dataTables.bootstrap.js') }}">public/js/dataTables.bootstrap.js</a>
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
							<a href=
							"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css</a>
						</li>
						<li>
							<a href="{{ url('css/dataTables.bootstrap.css') }}">public/css/dataTables.bootstrap.css</a>
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
						
						//API (features)

						Route::group([], function() {
						    
						    Route::get('features/api/tabs_and_scrolling', 'App\Http\Controllers\DatatableController&#64;tabs_and_scrolling');

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

					    //API (features)

					    public function tabs_and_scrolling()
					    {
					        return view('features.api.tabs_and_scrolling');       
					    }</code>
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