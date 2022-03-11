<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Multi-column ordering</title>
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
		$('#example').DataTable( {
			columnDefs: [ {
				targets: [ 0 ],
				orderData: [ 0, 1 ]
			}, {
				targets: [ 1 ],
				orderData: [ 1, 0 ]
			}, {
				targets: [ 4 ],
				orderData: [ 4, 0 ]
			} ]
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Multi-column ordering</span></h1>
			<div class="info">
				<p>DataTables allows ordering by multiple columns at the same time, which can be activated in a number of different ways:</p>
				<ul class="markdown">
					<li>User shift click on a column (added the clicked column as a secondary, tertiary etc ordering column).</li>
					<li>On a per-column basis (i.e. order by a specific column and then a secondary column if the data in the first column is identical), through the <a href=
					"//datatables.net/reference/option/columns.orderData"><code class="option" title="DataTables initialisation option">columns.orderData</code></a> option.
					</li>
					<li>Using the <a href="//datatables.net/reference/option/columns.orderData"><code class="option" title=
					"DataTables initialisation option">columns.orderData</code></a> option to specify a multiple column order by default (for example <code>[ 0, 1 ]</code>).
					</li>
					<li>Through the <a href="//datatables.net/reference/api/order()"><code class="api" title="DataTables API method">order()</code></a> API method.
					</li>
				</ul>
				<p>Note that, the ability for the user to shift click to order multiple columns can be disabled through the <a href=
				"//datatables.net/reference/option/orderMulti"><code class="option" title="DataTables initialisation option">orderMulti</code></a> option.</p>
				<p>The example below shows the first column having a secondary order applied to the second column in the table, vice-versa for the second column being tied
				directly to the first and the salary column to the first name column.</p>
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
								columnDefs: [ {
									targets: [ 0 ],
									orderData: [ 0, 1 ]
								}, {
									targets: [ 1 ],
									orderData: [ 1, 0 ]
								}, {
									targets: [ 4 ],
									orderData: [ 4, 0 ]
								} ]
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