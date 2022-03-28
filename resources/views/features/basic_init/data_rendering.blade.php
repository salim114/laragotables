<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Data rendering</title>	
    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="https://github.com/downloads/lafeber/world-flags-sprite/flags32.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">

	.f32 .flag {
		vertical-align: middle;
		margin: -8px 0;
	}

	progress {
		width: 100%;
	}

	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" class="init">
		
	$(document).ready(function () {
	  $("#example").DataTable({
	    ajax: "{{ asset('data/objects_salary.txt') }}",
	    columns: [
	      {
	        data: "name",
	      },
	      {
	        data: "position",
	        render: function (data, type) {
	          if (type === "display") {
	            let link = "http://datatables.net";

	            if (data[0] < "H") {
	              link = "http://cloudtables.com";
	            } else if (data[0] < "S") {
	              link = "http://editor.datatables.net";
	            }

	            return '<a href="' + link + '">' + data + "</a>";
	          }

	          return data;
	        },
	      },
	      {
	        className: "f32", // used by world-flags-sprite library
	        data: "office",
	        render: function (data, type) {
	          if (type === "display") {
	            let country = "";

	            switch (data) {
	              case "Argentina":
	                country = "ar";
	                break;
	              case "Edinburgh":
	                country = "_Scotland";
	                break;
	              case "London":
	                country = "_England";
	                break;
	              case "New York":
	              case "San Francisco":
	                country = "us";
	                break;
	              case "Sydney":
	                country = "au";
	                break;
	              case "Tokyo":
	                country = "jp";
	                break;
	              case "Algiers":
	                country = "dz";
	                break;
	            }

	            return '<span class="flag ' + country + '"></span> ' + data;
	          }

	          return data;
	        },
	      },
	      {
	        data: "extn",
	        render: function (data, type, row, meta) {
	          return type === "display"
	            ? '<progress value="' + data + '" max="9999"></progress>'
	            : data;
	        },
	      },
	      {
	        data: "start_date",
	      },
	      {
	        data: "salary",
	        render: function (data, type) {
	          var number = $.fn.dataTable.render
	            .number(",", ".", 2, "$")
	            .display(data);

	          if (type === "display") {
	            let color = "green";
	            if (data < 250000) {
	              color = "red";
	            } else if (data < 500000) {
	              color = "orange";
	            }

	            return '<span style="color:' + color + '">' + number + "</span>";
	          }

	          return number;
	        },
	      },
	    ],
	  });
	});

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Data rendering</span></h1>
			<div class="info">
				<p>Data within DataTables can be easily rendered to add graphics or colour to your tables, as demonstrated in the example on this page. These features make use of
				<a href="//datatables.net/reference/option/columns.render"><code class="option" title="DataTables initialisation option">columns.render</code></a> to customise the
				cells in three ways:</p>
				<ul class="markdown">
					<li>A flag is added to the <em>Office</em> column</li>
					<li>a HTML5 progress bar is added to the <em>Progress</em> column</li>
					<li>and the built-in number renderer is used to format the <em>Salary</em>.</li>
				</ul>
				<p>See the <a href="https://datatables.net/manual/data/renderers">data rendering manual page</a> for more details on how to use data renderers. Also, this example
				uses <a href="https://datatables.net/manual/ajax">Ajax to load the data</a>. More <a href="{{ url('features/ajax/index') }}">Ajax features are available</a>.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display nowrap" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Progress</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Progress</th>
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
						$(document).ready(function () {
						  $("#example").DataTable({
							ajax: &quot;&#123;&#123; asset('data/objects_salary.txt') &#125;&#125;&quot;,
							columns: [
						      {
						        data: "name",
						      },
						      {
						        data: "position",
						        render: function (data, type) {
						          if (type === "display") {
						            let link = "http://datatables.net";

						            if (data[0] < "H") {
						              link = "http://cloudtables.com";
						            } else if (data[0] < "S") {
						              link = "http://editor.datatables.net";
						            }

						            return '&lt;a href="' + link + '"&gt;' + data + "&lt;/a&gt;";
						          }

						          return data;
						        },
						      },
						      {
						        className: "f32", // used by world-flags-sprite library
						        data: "office",
						        render: function (data, type) {
						          if (type === "display") {
						            let country = "";

						            switch (data) {
						              case "Argentina":
						                country = "ar";
						                break;
						              case "Edinburgh":
						                country = "_Scotland";
						                break;
						              case "London":
						                country = "_England";
						                break;
						              case "New York":
						              case "San Francisco":
						                country = "us";
						                break;
						              case "Sydney":
						                country = "au";
						                break;
						              case "Tokyo":
						                country = "jp";
						                break;
						              case "Algiers":
						                country = "dz";
						                break;
						            }

						            return '&lt;span class="flag ' + country + '"&gt;&lt;/span&gt; ' + data;
						          }

						          return data;
						        },
						      },
						      {
						        data: "extn",
						        render: function (data, type, row, meta) {
						          return type === "display"
						            ? '&lt;progress value="' + data + '" max="9999"&gt;&lt;/progress&gt;'
						            : data;
						        },
						      },
						      {
						        data: "start_date",
						      },
						      {
						        data: "salary",
						        render: function (data, type) {
						          var number = $.fn.dataTable.render
						            .number(",", ".", 2, "$")
						            .display(data);

						          if (type === "display") {
						            let color = "green";
						            if (data < 250000) {
						              color = "red";
						            } else if (data < 500000) {
						              color = "orange";
						            }

						            return '&lt;span style="color:' + color + '"&gt;' + number + "&lt;/span&gt;";
						          }

						          return number;
						        },
						      },
						    ],
						  });
						});</code>&lt;
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
						additional CSS used is shown below:</p>
						<code class="multiline language-css">
							.f32 .flag {
								vertical-align: middle;
								margin: -8px 0;
							}

							progress {
								width: 100%;
							}</code>
					</div>
					<p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>
					<ul>
						<li>
							<a href="{{ url('css/jquery.dataTables.css') }}">public/css/jquery.dataTables.css</a>
						</li>
						<li>
							<a href="https://github.com/downloads/lafeber/world-flags-sprite/flags32.css">https://github.com/downloads/lafeber/world-flags-sprite/flags32.css</a>
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
						
						//Basic initialisation (features)

						Route::group([], function() {
						    
						    Route::get('features/basic_init/data_rendering', 'App\Http\Controllers\DatatableController&#64;data_rendering');

						});</code>
					<p>In addition to the above route, the "web.php" file includes all the routes from the other examples (features) which i deliberately hide to keep focus on each features separately.</p>
				</div>
				<div id="controller" class="ctrl">
					<p>The controller shown below is used to defining all of your request handling logic you may wish to organize seperetly from your route files:</p>
					<code class="multiline language-ctrl">
						<&#63;php

						namespace App\Http\Controllers;

						use Illuminate\Http\Request;
						use App\Models\Datatable;
						use DataTables;

						class DatatableController extends Controller
						{
						    /**
						     * Display a listing of the resource.
						     *
						     * &#64;return \Illuminate\Http\Response
						     */

					    //Basic initialisation (features)

					    public function data_rendering()
					    {
					        return view('features.basic_init.data_rendering');       
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