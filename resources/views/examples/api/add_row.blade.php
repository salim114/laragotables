<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables example - Add rows</title>
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
	
	$(document).ready(function() {
		var t = $('#example').DataTable();
		var counter = 1;

		$('#addRow').on( 'click', function () {
			t.row.add( [
				counter +'.1',
				counter +'.2',
				counter +'.3',
				counter +'.4',
				counter +'.5'
			] ).draw( false );

			counter++;
		} );

		// Automatically add a first row of data
		$('#addRow').click();
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Add rows</span></h1>
			<div class="info">
				<p>New rows can be added to a DataTable using the <a href="//datatables.net/reference/api/row.add()"><code class="api" title=
				"DataTables API method">row.add()</code></a> API method. Simply call the API function with the data for the new row (be it an array or object). Multiple rows can
				be added using the <a href="//datatables.net/reference/api/rows.add()"><code class="api" title="DataTables API method">rows.add()</code></a> method (note the
				plural). Data can likewise be updated with the <a href="//datatables.net/reference/api/row().data()"><code class="api" title=
				"DataTables API method">row().data()</code></a> and <a href="//datatables.net/reference/api/row().remove()"><code class="api" title=
				"DataTables API method">row().remove()</code></a> methods.</p>
				<p>Note that in order to see the new row in the table you must call the <a href="//datatables.net/reference/api/draw()"><code class="api" title=
				"DataTables API method">draw()</code></a> method, which is easily done through the chaining that the DataTables API employs.</p>
				<p>This example shows a single row being added each time the button below is clicked upon.</p>
				<p>The <a href="https://editor.datatables.net/">Editor extension</a> adds full table editing controls to a DataTable, including creating, editing and deleting
				rows.</p>
			</div>
			<div class="demo-html">
				<button id="addRow">Add new row</button>
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Column 1</th>
							<th>Column 2</th>
							<th>Column 3</th>
							<th>Column 4</th>
							<th>Column 5</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Column 1</th>
							<th>Column 2</th>
							<th>Column 3</th>
							<th>Column 4</th>
							<th>Column 5</th>
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
						$(document).ready(function() {
							var t = $('#example').DataTable();
							var counter = 1;

							$('#addRow').on( 'click', function () {
								t.row.add( [
									counter +'.1',
									counter +'.2',
									counter +'.3',
									counter +'.4',
									counter +'.5'
								] ).draw( false );

								counter++;
							} );

							// Automatically add a first row of data
							$('#addRow').click();
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

						// and all the others group with their routes
						//Ajax (examples)
						Route::group([], function() {
						    // and all the others routes
						    Route::get('examples/ajax/simple', 'App\Http\Controllers\DatatableController&#64;simple');

						});
					    //</code>
					<p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>					
				</div>
				<div id="controller" class="ctrl">
					<p>The Javascript shown below is used to initialise the table shown in this example:</p>
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

					    //Ajax

					    public function simple()
					    {
					        $datatables = Datatable::all();
					        return view('examples.ajax.simple', compact('datatables'));       
					    }
						//</code>
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
				<div id="model" class="model">
					<p>The Javascript shown below is used to initialise the table shown in this example:</p>
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
						}
						//</code>
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
			</div>
		</section>
	</div>
	<section>
		@include('layouts.footer')	
	</section>
</body>
</html>