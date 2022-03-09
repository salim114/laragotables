<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables feature - Read HTML to data objects</title>
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
		$('#example').DataTable({
			"columns": [
				{ "data": "name" },
				{ "data": "position" },
				{ "data": "office" },
				{ "data": "age" },
				{ "data": "start_date" },
				{ "data": "salary" }
			]
		});
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
				<section>
			<h1>DataTables feature <span>Read HTML to data objects</span></h1>
			<div class="info">
				<p>When DataTables reads the table content from an HTML table (rather than an Ajax or Javascript data source), by default it will read the information in the table
				into an array that DataTables stores internally. Each array element represents a column.</p>
				<p>It can be very useful to have DataTables read the information into an object rather than an array, an option that can be triggered using the <a href=
				"//datatables.net/reference/option/columns.data"><code class="option" title="DataTables initialisation option">columns.data</code></a> initialisation option to
				define how you want the data to be stored. Typically <a href="//datatables.net/reference/option/columns.data"><code class="option" title=
				"DataTables initialisation option">columns.data</code></a> is used with <a href="{{ url('features/ajax/objects') }}">Ajax sourced data</a> to tell DataTables where to read data
				from, but as can be seen here it also tells DataTables where to write the data to.</p>
				<p>This ability to store data into an object can be very useful when working with the DataTables API after the table has been initialised.</p>
				<p>In the example shown here, the data read from each row in the table is read into a Javascript object with the structure:</p><pre><code class="multiline language-js">
						{
							"name": "...",
							"position": "...",
							"office": "...",
							"age": "...",
							"start_date": "...",
							"salary": "..."
						}</code></pre>
				<p>Please note that this feature requires DataTables 1.10.3 or newer.</p>
			</div>
			<div class="demo-html">
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
						$(document).ready(function() {
							$('#example').DataTable({
								&quot;columns&quot;: [
									{ &quot;data&quot;: &quot;name&quot; },
									{ &quot;data&quot;: &quot;position&quot; },
									{ &quot;data&quot;: &quot;office&quot; },
									{ &quot;data&quot;: &quot;age&quot; },
									{ &quot;data&quot;: &quot;start_date&quot; },
									{ &quot;data&quot;: &quot;salary&quot; }
								]
							});
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