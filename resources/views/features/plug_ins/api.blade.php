<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables example - API plug-in methods</title>
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

	$.fn.dataTable.Api.register( 'column().data().sum()', function () {
		return this.reduce( function (a, b) {
			var x = parseFloat( a ) || 0;
			var y = parseFloat( b ) || 0;
			return x + y;
		} );
	} );

	/* Init the table and fire off a call to get the hidden nodes. */
	$(document).ready(function() {
		var table = $('#example').DataTable();
		
		$('<button>Click to sum age in all rows</button>')
			.prependTo( '#demo' )
			.on( 'click', function () {
				alert( 'Column sum is: '+ table.column( 3 ).data().sum() );
			} );

		$('<button>Click to sum age of visible rows</button>')
			.prependTo( '#demo' )
			.on( 'click', function () {
				alert( 'Column sum is: '+ table.column( 3, {page:'current'} ).data().sum() );
			} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>API plug-in methods</span></h1>
			<div class="info">
				<p>The DataTables API is designed to be fully extensible, with custom functions being very easy to add using the <code>$.fn.dataTable.Api.register</code> function.
				This function takes two arguments; the first being the name of the method to be added and its chaining hierarchy, and the second the function itself.</p>
				<p>This example shows how a <code>sum()</code> method can easily be added to the API so you can get the sum of a column in a single line:
				<code>table.column().data().sum()</code>. Due to the chaining of the methods, this allows <code>sum()</code> to very easily give the sum for any selected column,
				and to limit the sum to just the current page, filtered data or all pages. This is done using the options for the <a href=
				"//datatables.net/reference/api/column()"><code class="api" title="DataTables API method">column()</code></a> method and the options for its selectors.</p>
				<p>For more information about API plug_ins; creating them and their requirements, please refer to the plug-in development documentation.</p>
			</div>
			<div class="demo-html">
				<div id="demo"></div>
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
						$.fn.dataTable.Api.register( 'column().data().sum()', function () {
							return this.reduce( function (a, b) {
								var x = parseFloat( a ) || 0;
								var y = parseFloat( b ) || 0;
								return x + y;
							} );
						} );

						/* Init the table and fire off a call to get the hidden nodes. */
						$(document).ready(function() {
							var table = $('#example').DataTable();
							
							$('&lt;button&gt;Click to sum age in all rows&lt;/button&gt;')
								.prependTo( '#demo' )
								.on( 'click', function () {
									alert( 'Column sum is: '+ table.column( 3 ).data().sum() );
								} );

							$('&lt;button&gt;Click to sum age of visible rows&lt;/button&gt;')
								.prependTo( '#demo' )
								.on( 'click', function () {
									alert( 'Column sum is: '+ table.column( 3, {page:'current'} ).data().sum() );
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
			</div>
		</section>
	</div>
	<section>

		@include('layouts.footer')	

	</section>
</body>
</html>