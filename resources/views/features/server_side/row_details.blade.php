<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Row details</title>
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">
	
	td.details-control {
		background: url("{{ asset('images/details_open.png') }}") no-repeat center center;
		cursor: pointer;
	}
	tr.details td.details-control {
		background: url("{{ asset('images/details_close.png') }}") no-repeat center center;
	}

	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" class="init">
	
	function format(d) {
	  return 'Full name: '+d.first_name+' '+d.last_name+'<br>'+
			   'Salary: $'+d.salary+'<br>'+
			   'The child row can contain any data you wish, including links, images, inner tables etc.';
	}

	$(document).ready(function () {
	  var dt = $("#example").DataTable({
	    processing: true,
	    serverSide: true,
	    ajax: "{{ route('row_details_ss') }}",
	    columns: [
	      {
	        class: "details-control",
	        orderable: false,
	        data: null,
	        defaultContent: "",
	      },
	      { data: "first_name" },
	      { data: "last_name" },
	      { data: "position" },
	      { data: "office" },
	    ],
	    order: [[1, "asc"]],
	  });

	  // Array to track the ids of the details displayed rows
	  var detailRows = [];

	  $("#example tbody").on("click", "tr td.details-control", function () {
	    var tr = $(this).closest("tr");
	    var row = dt.row(tr);
	    var idx = $.inArray(tr.attr("id"), detailRows);

	    if (row.child.isShown()) {
	      tr.removeClass("details");
	      row.child.hide();

	      // Remove from the 'open' array
	      detailRows.splice(idx, 1);
	    } else {
	      tr.addClass("details");
	      row.child(format(row.data())).show();

	      // Add to the 'open' array
	      if (idx === -1) {
	        detailRows.push(tr.attr("id"));
	      }
	    }
	  });

	  // On each draw, loop over the `detailRows` array and show any child rows
	  dt.on("draw", function () {
	    $.each(detailRows, function (i, id) {
	      $("#" + id + " td.details-control").trigger("click");
	    });
	  });
	});

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Row details</span></h1>
			<div class="info">
				<p>This example shows the use of DataTables' ability to show and hide child rows which are attached to a parent row in the host table. This is often used to show
				additional information about a row, particularly when you wish to convey more information about a row than there is space for in the host table.</p>
				<p>The example below shows server-side processing being used with the first column having an event listener attached to it which will toggle the child row's
				display. This is set up using <a href="//datatables.net/reference/option/columns.data"><code class="option" title=
				"DataTables initialisation option">columns.data</code></a> and <a href="//datatables.net/reference/option/columns.defaultContent"><code class="option" title=
				"DataTables initialisation option">columns.defaultContent</code></a>, in combination with CSS to show an empty cell with a background image which can be clicked
				upon.</p>
				<p>The event handler makes use of the <a href="//datatables.net/reference/api/row().child"><code class="api" title="DataTables API method">row().child</code></a>
				methods to firstly check if a row is already displayed, and if so hide it, if not show it. The content of the child row is, in this example, defined by the
				<code>format()</code> function, but you would replace that with whatever you wanted to show the content required, possibly including, for example, an Ajax call to
				the server to obtain the extra information to show. Note that the format details function has access to the full data source object for the row, including
				information that is not actually shown in the table (the salary parameter for example).</p>
				<p>Furthermore, this example shows a small difference from the <a href="{{ url('features/api/row_details') }}">client-side row details example</a> in that to have rows
				automatically reopen when the table is redrawn, we need to track a unique identifier for each row - in this case the row <code>id</code>. This is required because
				in server-side processing mode rows are automatically destroyed and recreated on each draw.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th></th>
							<th>First name</th>
							<th>Last name</th>
							<th>Position</th>
							<th>Office</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th>First name</th>
							<th>Last name</th>
							<th>Position</th>
							<th>Office</th>
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
						function format(d) {
						  return 'Full name: '+d.first_name+' '+d.last_name+'&lt;br&gt;'+
								   'Salary: $'+d.salary+'&lt;br&gt;'+
								   'The child row can contain any data you wish, including links, images, inner tables etc.';
						}

						$(document).ready(function () {
						  var dt = $("#example").DataTable({
						    processing: true,
						    serverSide: true,
							ajax: "&#123;&#123; route('row_details_ss') &#125;&#125;",
							columns: [
						      {
						        class: "details-control",
						        orderable: false,
						        data: null,
						        defaultContent: "",
						      },
						      { data: "first_name" },
						      { data: "last_name" },
						      { data: "position" },
						      { data: "office" },
						    ],
						    order: [[1, "asc"]],
						  });

						  // Array to track the ids of the details displayed rows
						  var detailRows = [];

						  $("#example tbody").on("click", "tr td.details-control", function () {
						    var tr = $(this).closest("tr");
						    var row = dt.row(tr);
						    var idx = $.inArray(tr.attr("id"), detailRows);

						    if (row.child.isShown()) {
						      tr.removeClass("details");
						      row.child.hide();

						      // Remove from the 'open' array
						      detailRows.splice(idx, 1);
						    } else {
						      tr.addClass("details");
						      row.child(format(row.data())).show();

						      // Add to the 'open' array
						      if (idx === -1) {
						        detailRows.push(tr.attr("id"));
						      }
						    }
						  });

						  // On each draw, loop over the `detailRows` array and show any child rows
						  dt.on("draw", function () {
						    $.each(detailRows, function (i, id) {
						      $("#" + id + " td.details-control").trigger("click");
						    });
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
						additional CSS used is shown below:</p>
						<code class="multiline language-css">
							td.details-control {
								background: url('&#123;&#123; asset('images/details_open.png') &#125;&#125;') no-repeat center center;
								cursor: pointer;
							}
							tr.details td.details-control {
								background: url('&#123;&#123; asset('images/details_close.png') &#125;&#125;') no-repeat center center;
							}</code>
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
						    
						    Route::get('features/server_side/row_details', 'App\Http\Controllers\DatatableController&#64;row_details_ss')->name('row_details_ss');

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

					    //Server-side (features)

					    public function row_details_ss(Request $request)
					    {
					         if ($request->ajax()) {
					            $datatables = Datatable::all();
					            return Datatables::of($datatables)
					                ->make(true);
					        }

					        return view('features.server_side.row_details');
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