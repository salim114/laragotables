<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Form inputs</title>
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
	
	$(document).ready(function () {
	  var table = $("#example").DataTable({
	    columnDefs: [
	      {
	        orderable: false,
	        targets: [1, 2, 3],
	      },
	    ],
	  });

	  $("button").click(function () {
	    var data = table.$("input, select").serialize();
	    alert(
	      "The following data would have been submitted to the server: \n\n" +
	        data.substr(0, 120) +
	        "..."
	    );
	    return false;
	  });
	});

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Form inputs</span></h1>
			<div class="info">
				<p>In order to perform paging, ordering, searching etc, DataTables can remove rows and cells from the document (i.e. those rows / cells which are not needed are
				not inserted into the document). This increases performance and compatibility, however, it means that submitting forms which span multiple pages requires a little
				bit of additional work to get the information that is not in the document any longer.</p>
				<p>The <a href="//datatables.net/reference/api/%24()"><code class="api" title="DataTables API method">$()</code></a> method can be used to get nodes from the
				document regardless of paging, ordering etc. This example shows <a href="//datatables.net/reference/api/%24()"><code class="api" title=
				"DataTables API method">$()</code></a> being used to get all <code class="tag" title="HTML tag">input</code> elements from the table. In the example a simple
				<code>alert()</code> is used to show the information from the form, but an Ajax call to the server with the form data could easily be performed.</p>
				<p>If you are interested in a complete CRUD editing suit for DataTables have a look at the <a href="//editor.datatables.net">Editor extension</a> which provides
				simple setup and complete integration with DataTables.</p>
			</div>
			<div class="demo-html">
				<button type="submit">Submit form</button>
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Position</th>
							<th>Office</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($datatables as $datatable)
	<tr>
							<td>{{$datatable->first_name}} {{$datatable->last_name}}</td>
							<td><input type="text" id="row-1-age" name="row-1-age" value="{{$datatable->age}}"></td>
							<td><input type="text" id="row-1-position" name="row-1-position" value="{{$datatable->position}}"></td>
							<td><select size="1" id="row-1-office" name="row-1-office">
								<option value="{{$datatable->office}}" selected="selected">
									{{$datatable->office}}
								</option>
								<option value="London">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
					@endforeach
</tbody>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Age</th>
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
						$(document).ready(function () {
						  var table = $("#example").DataTable({
						    columnDefs: [
						      {
						        orderable: false,
						        targets: [1, 2, 3],
						      },
						    ],
						  });

						  $("button").click(function () {
						    var data = table.$("input, select").serialize();
						    alert(
						      "The following data would have been submitted to the server: \n\n" +
						        data.substr(0, 120) +
						        "..."
						    );
						    return false;
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
						    
						    Route::get('features/api/form', 'App\Http\Controllers\DatatableController&#64;form');

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

					    public function form()
					    {
					        $datatables = Datatable::all();
					        return view('features.api.form', compact('datatables'));       
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