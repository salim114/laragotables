<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables feature - Custom filtering - range search</title>
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

	/* Custom filtering function which will search data in column four between two values */
	$.fn.dataTable.ext.search.push(
		function( settings, data, dataIndex ) {
			var min = parseInt( $('#min').val(), 10 );
			var max = parseInt( $('#max').val(), 10 );
			var age = parseFloat( data[3] ) || 0; // use data for the age column

			if ( ( isNaN( min ) && isNaN( max ) ) ||
				 ( isNaN( min ) && age <= max ) ||
				 ( min <= age   && isNaN( max ) ) ||
				 ( min <= age   && age <= max ) )
			{
				return true;
			}
			return false;
		}
	);

	$(document).ready(function() {
		var table = $('#example').DataTable();
		
		// Event listener to the two range filtering inputs to redraw on input
		$('#min, #max').keyup( function() {
			table.draw();
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Custom filtering - range search</span></h1>
			<div class="info">
				<p>There may be occasions when you wish to search data presented to the end user in your own manner, common features are number range searches (in between two
				numbers) and date range searches. DataTables provides an API method to add your own search functions, <code>$.fn.dataTable.ext.search</code>. This is an array of
				functions (push your own onto it) which will will be run at table draw time to see if a particular row should be included or not.</p>
				<p>This example shows a search being performed on the age column in the data, based upon two inputs.</p>
			</div>
			<div class="demo-html">
				<table border="0" cellspacing="5" cellpadding="5">
					<tr>
						<td>Minimum age:</td>
						<td><input type="text" id="min" name="min"></td>
					</tr>
					<tr>
						<td>Maximum age:</td>
						<td><input type="text" id="max" name="max"></td>
					</tr>
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
						/* Custom filtering function which will search data in column four between two values */
						$.fn.dataTable.ext.search.push(
							function( settings, data, dataIndex ) {
								var min = parseInt( $('#min').val(), 10 );
								var max = parseInt( $('#max').val(), 10 );
								var age = parseFloat( data[3] ) || 0; // use data for the age column

								if ( ( isNaN( min ) &amp;&amp; isNaN( max ) ) ||
									 ( isNaN( min ) &amp;&amp; age &lt;= max ) ||
									 ( min &lt;= age   &amp;&amp; isNaN( max ) ) ||
									 ( min &lt;= age   &amp;&amp; age &lt;= max ) )
								{
									return true;
								}
								return false;
							}
						);

						$(document).ready(function() {
							var table = $('#example').DataTable();
							
							// Event listener to the two range filtering inputs to redraw on input
							$('#min, #max').keyup( function() {
								table.draw();
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