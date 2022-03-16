<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Child rows with StateSave</title>
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
		
	/* Formatting function for row details - modify as you need */
	function format ( d ) {
	  // `d` is the original data object for the row
	  return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
	    '<tr>'+
	      '<td>Full name:</td>'+
	      '<td>'+d.name+'</td>'+
	    '</tr>'+
	    '<tr>'+
	      '<td>Extension number:</td>'+
	      '<td>'+d.extn+'</td>'+
	    '</tr>'+
	    '<tr>'+
	      '<td>Extra info:</td>'+
	      '<td>And any further details here (images etc)...</td>'+
	    '</tr>'+
	  '</table>';
	}

	$(document).ready(function () {
	  // Add event listener for opening and closing details
	  $("#example").on("click", "tbody td.dt-control", function () {
	    var tr = $(this).closest("tr");
	    var row = table.row(tr);

	    if (row.child.isShown()) {
	      // This row is already open - close it
	      row.child.hide();
	    } else {
	      // Open this row
	      row.child(format(row.data())).show();
	    }
	  });

	  $("#example").on("requestChild.dt", function (e, row) {
	    row.child(format(row.data())).show();
	  });

	  var table = $("#example").DataTable({
	    ajax: "{{ asset('data/objects.txt') }}",
	    rowId: "id",
	    stateSave: true,
	    columns: [
	      {
	        className: "dt-control",
	        orderable: false,
	        data: null,
	        defaultContent: "",
	      },
	      { data: "name" },
	      { data: "position" },
	      { data: "office" },
	      { data: "salary" },
	    ],
	    order: [[1, "asc"]],
	  });
	});

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Child rows with StateSave</span></h1>
			<div class="info">
				<p>The DataTables API has a number of methods for attaching child rows to a <em>parent</em> row in the DataTable. This can be used to show additional information
				about a row, useful for cases where you wish to convey more information about a row than there is space for in the host table.</p>
				<p>The example below makes use of both <a href="//datatables.net/reference/option/stateSave"><code class="option" title=
				"DataTables initialisation option">stateSave</code></a> and the <a href="//datatables.net/reference/api/row().child"><code class="api" title=
				"DataTables API method">row().child</code></a> methods to first check if a row is already displayed, and if so hide it (<a href=
				"//datatables.net/reference/api/row().child.hide()"><code class="api" title="DataTables API method">row().child.hide()</code></a>), otherwise show it (<a href=
				"//datatables.net/reference/api/row().child.show()"><code class="api" title="DataTables API method">row().child.show()</code></a>). The content of the child row in
				this example is defined by the <code>format()</code> function, but you would replace that with whatever content you wanted to show, possibly including, for
				example, <a href="https://www.datatables.net/blog/2017-03-31">an Ajax call to the server</a> to obtain any extra information.</p>
				<p>Because of the state save element it is possible to maintain the state for this example across reloads. The user must add a listener for the <a href=
				"//datatables.net/reference/event/requestChild.dt"><code class="event" title="DataTables event">requestChild.dt</code></a> to display the row in whatever format
				that they please.</p>
				<p>The listeners must also be set before the table initialisation, otherwise when a state is attempting to load, the functionality set in the listeners will not be
				available.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
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
						/* Formatting function for row details - modify as you need */
						function format ( d ) {
						  // `d` is the original data object for the row
						  return '&lt;table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;"&gt;'+
						    '&lt;tr&gt;'+
						      '&lt;td&gt;Full name:&lt;/td&gt;'+
						      '&lt;td&gt;'+d.name+'&lt;/td&gt;'+
						    '&lt;/tr&gt;'+
						    '&lt;tr&gt;'+
						      '&lt;td&gt;Extension number:&lt;/td&gt;'+
						      '&lt;td&gt;'+d.extn+'&lt;/td&gt;'+
						    '&lt;/tr&gt;'+
						    '&lt;tr&gt;'+
						      '&lt;td&gt;Extra info:&lt;/td&gt;'+
						      '&lt;td&gt;And any further details here (images etc)...&lt;/td&gt;'+
						    '&lt;/tr&gt;'+
						  '&lt;/table&gt;';
						}

						$(document).ready(function () {
						  // Add event listener for opening and closing details
						  $("#example").on("click", "tbody td.dt-control", function () {
						    var tr = $(this).closest("tr");
						    var row = table.row(tr);

						    if (row.child.isShown()) {
						      // This row is already open - close it
						      row.child.hide();
						    } else {
						      // Open this row
						      row.child(format(row.data())).show();
						    }
						  });

						  $("#example").on("requestChild.dt", function (e, row) {
						    row.child(format(row.data())).show();
						  });

						  var table = $("#example").DataTable({
							ajax: "&#123;&#123; asset('data/objects.txt') &#125;&#125;"
							rowId: "id",
						    stateSave: true,
						    columns: [
						      {
						        className: "dt-control",
						        orderable: false,
						        data: null,
						        defaultContent: "",
						      },
						      { data: "name" },
						      { data: "position" },
						      { data: "office" },
						      { data: "salary" },
						    ],
						    order: [[1, "asc"]],
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
						    
						    Route::get('features/api/row_details_stateSave', 'App\Http\Controllers\DatatableController&#64;row_details_stateSave');

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

					    public function row_details_stateSave()
					    {
					        return view('features.api.row_details_stateSave');       
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