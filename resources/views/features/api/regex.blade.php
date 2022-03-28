<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Search API (regular expressions)</title>
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
	<script type="text/javascript" language="javascript" class="init">
	
	function filterGlobal() {
	  $("#example")
	    .DataTable()
	    .search(
	      $("#global_filter").val(),
	      $("#global_regex").prop("checked"),
	      $("#global_smart").prop("checked")
	    )
	    .draw();
	}

	function filterColumn(i) {
	  $("#example")
	    .DataTable()
	    .column(i)
	    .search(
	      $("#col" + i + "_filter").val(),
	      $("#col" + i + "_regex").prop("checked"),
	      $("#col" + i + "_smart").prop("checked")
	    )
	    .draw();
	}

	$(document).ready(function () {
	  $("#example").DataTable();

	  $("input.global_filter").on("keyup click", function () {
	    filterGlobal();
	  });

	  $("input.column_filter").on("keyup click", function () {
	    filterColumn($(this).parents("tr").attr("data-column"));
	  });
	});

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Search API (regular expressions)</span></h1>
			<div class="info">
				<p>Searching a table is one of the most common user interactions with a DataTables table, and DataTables provides a number of methods for you to control this
				interaction. There are APIs for the global search (<a href="//datatables.net/reference/api/search()"><code class="api" title=
				"DataTables API method">search()</code></a>) and for each individual column (<a href="//datatables.net/reference/api/column().search()"><code class="api" title=
				"DataTables API method">column().search()</code></a>).</p>
				<p>Note also that you must call the <a href="//datatables.net/reference/api/draw()"><code class="api" title="DataTables API method">draw()</code></a> method after
				performing the search, in order for the results to be displayed.</p>
				<p>Each search (global or column) can be marked as a regular expression (allowing you to create very complex interactions) and as a smart search or not. When smart
				searching is enabled on a particular search, DataTables will modify the user input string to a complex regular expression which can make searching more
				intuitive.</p>
				<p>This example allows you to "play" with the various searching options that DataTables provides.</p>
			</div>
			<div class="demo-html">
				<table cellpadding="3" cellspacing="0" border="0" style="width: 67%; margin: 0 auto 2em auto;">
					<thead>
						<tr>
							<th>Target</th>
							<th>Search text</th>
							<th>Treat as regex</th>
							<th>Use smart search</th>
						</tr>
					</thead>
					<tbody>
						<tr id="filter_global">
							<td>Global search</td>
							<td align="center"><input type="text" class="global_filter" id="global_filter"></td>
							<td align="center"><input type="checkbox" class="global_filter" id="global_regex"></td>
							<td align="center"><input type="checkbox" class="global_filter" id="global_smart" checked="checked"></td>
						</tr>
						<tr id="filter_col1" data-column="0">
							<td>Column - Name</td>
							<td align="center"><input type="text" class="column_filter" id="col0_filter"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col0_regex"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col0_smart" checked="checked"></td>
						</tr>
						<tr id="filter_col2" data-column="1">
							<td>Column - Position</td>
							<td align="center"><input type="text" class="column_filter" id="col1_filter"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col1_regex"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col1_smart" checked="checked"></td>
						</tr>
						<tr id="filter_col3" data-column="2">
							<td>Column - Office</td>
							<td align="center"><input type="text" class="column_filter" id="col2_filter"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col2_regex"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col2_smart" checked="checked"></td>
						</tr>
						<tr id="filter_col4" data-column="3">
							<td>Column - Age</td>
							<td align="center"><input type="text" class="column_filter" id="col3_filter"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col3_regex"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col3_smart" checked="checked"></td>
						</tr>
						<tr id="filter_col5" data-column="4">
							<td>Column - Start date</td>
							<td align="center"><input type="text" class="column_filter" id="col4_filter"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col4_regex"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col4_smart" checked="checked"></td>
						</tr>
						<tr id="filter_col6" data-column="5">
							<td>Column - Salary</td>
							<td align="center"><input type="text" class="column_filter" id="col5_filter"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col5_regex"></td>
							<td align="center"><input type="checkbox" class="column_filter" id="col5_smart" checked="checked"></td>
						</tr>
					</tbody>
				</table>
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($datatables as $datatable)
	<tr>
							<td>{{$datatable->first_name}} {{$datatable->last_name}}</td>
							<td>{{$datatable->position}}</td>
							<td>{{$datatable->office}}</td>
							<td>{{$datatable->age}}</td>
							<td>{{date('Y/m/d', strtotime($datatable->start_date));}}</td>
							<td>${{number_format($datatable->salary, 0, '.', ',') }}</td>
						</tr>
					@endforeach
</tbody>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
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
						function filterGlobal() {
						  $("#example")
						    .DataTable()
						    .search(
						      $("#global_filter").val(),
						      $("#global_regex").prop("checked"),
						      $("#global_smart").prop("checked")
						    )
						    .draw();
						}

						function filterColumn(i) {
						  $("#example")
						    .DataTable()
						    .column(i)
						    .search(
						      $("#col" + i + "_filter").val(),
						      $("#col" + i + "_regex").prop("checked"),
						      $("#col" + i + "_smart").prop("checked")
						    )
						    .draw();
						}

						$(document).ready(function () {
						  $("#example").DataTable();

						  $("input.global_filter").on("keyup click", function () {
						    filterGlobal();
						  });

						  $("input.column_filter").on("keyup click", function () {
						    filterColumn($(this).parents("tr").attr("data-column"));
						  });
						});</code>
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
						
						//API (features)

						Route::group([], function() {
						    
						    Route::get('features/api/regex', 'App\Http\Controllers\DatatableController&#64;regex');

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

					    //API (features)

					    public function regex()
					    {
					        $datatables = Datatable::all();
					        return view('features.api.regex', compact('datatables'));       
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