<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Footer callback</title>
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">
	
	th {
	 	white-space: nowrap; 
	}

	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" class="init">	

	$(document).ready(function() {
		$('#example').DataTable( {
			"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api();

				// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ?
						i.replace(/[\$,]/g, '')*1 :
						typeof i === 'number' ?
							i : 0;
				};

				// Total over all pages
				total = api
					.column( 4 )
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );

				// Total over this page
				pageTotal = api
					.column( 4, { page: 'current'} )
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );

				// Update footer
				$( api.column( 4 ).footer() ).html(
					'$'+pageTotal +' ( $'+ total +' total)'
				);
			}
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Footer callback</span></h1>
			<div class="info">
				<p>Through the use of the header and footer callback manipulation functions provided by DataTables (<a href=
				"//datatables.net/reference/option/headerCallback"><code class="option" title="DataTables initialisation option">headerCallback</code></a> and <a href=
				"//datatables.net/reference/option/footerCallback"><code class="option" title="DataTables initialisation option">footerCallback</code></a>), it is possible to
				perform some powerful and useful data manipulation functions, such as summarising data in the table.</p>
				<p>The example below shows a footer callback being used to total the data for a column (both the visible and the hidden data) using the <a href=
				"//datatables.net/reference/api/column().data()"><code class="api" title="DataTables API method">column().data()</code></a> API method and <a href=
				"//datatables.net/reference/api/column().footer()"><code class="api" title="DataTables API method">column().footer()</code></a> for writing the value into the
				footer.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>First name</th>
							<th>Last name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($datatables as $datatable)
	<tr>
							<td>{{$datatable->first_name}}</td>
							<td>{{$datatable->last_name}}</td>
							<td>{{$datatable->position}}</td>
							<td>{{$datatable->office}}</td>
							<td>${{number_format($datatable->salary, 0, '.', ',') }}</td>
						</tr>
					@endforeach
</tbody>
					<tfoot>
						<tr>
							<th colspan="4" style="text-align:right">Total:</th>
							<th></th>
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
							$('#example').DataTable( {
								&quot;footerCallback&quot;: function ( row, data, start, end, display ) {
									var api = this.api();

									// Remove the formatting to get integer data for summation
									var intVal = function ( i ) {
										return typeof i === 'string' ?
											i.replace(/[\$,]/g, '')*1 :
											typeof i === 'number' ?
												i : 0;
									};

									// Total over all pages
									total = api
										.column( 4 )
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );

									// Total over this page
									pageTotal = api
										.column( 4, { page: 'current'} )
										.data()
										.reduce( function (a, b) {
											return intVal(a) + intVal(b);
										}, 0 );

									// Update footer
									$( api.column( 4 ).footer() ).html(
										'$'+pageTotal +' ( $'+ total +' total)'
									);
								}
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
						additional CSS used is shown below:</p>
						<code class="multiline language-css">
							th { 
								white-space: nowrap; 
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
			</div>
		</section>
	</div>
	<section>
		@include('layouts.footer')	
	</section>
</body>
</html>