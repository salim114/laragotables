<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Live DOM ordering</title>
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

	/* Create an array with the values of all the input boxes in a column */
	$.fn.dataTable.ext.order['dom-text'] = function  ( settings, col )
	{
		return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
			return $('input', td).val();
		} );
	}

	/* Create an array with the values of all the input boxes in a column, parsed as numbers */
	$.fn.dataTable.ext.order['dom-text-numeric'] = function  ( settings, col )
	{
		return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
			return $('input', td).val() * 1;
		} );
	}

	/* Create an array with the values of all the select options in a column */
	$.fn.dataTable.ext.order['dom-select'] = function  ( settings, col )
	{
		return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
			return $('select', td).val();
		} );
	}

	/* Create an array with the values of all the checkboxes in a column */
	$.fn.dataTable.ext.order['dom-checkbox'] = function  ( settings, col )
	{
		return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
			return $('input', td).prop('checked') ? '1' : '0';
		} );
	}

	/* Initialise the table with the required column ordering data types */
	$(document).ready(function() {
		$('#example').DataTable( {
			"columns": [
				null,
				{ "orderDataType": "dom-text-numeric" },
				{ "orderDataType": "dom-text", type: 'string' },
				{ "orderDataType": "dom-select" }
			]
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Live DOM ordering</span></h1>
			<div class="info">
				<p>This example shows how you can use information available in the DOM to order columns. Typically DataTables will read information to be ordered during its
				initialisation phase, and this will not be updated based on user interaction, so ordering on columns which have, for example, form elements in them, may not
				reflect the current value of the input. To overcome this problem, you must update the data that DataTables will order on, just prior to the order. This method is
				much more efficient than actually ordering using the DOM, since only one DOM query is needed for each cell to be ordered.</p>
				<p>The example below shows the first column as normal text with ordering as you would expect. The following columns all have a form input element of different
				kinds, and the information contained within is what DataTables will perform the order on, based on the value at the time of the order.</p>
				<p>This is a fairly simple example, but you aren't constrained to just using form input elements, you could use anything and customise your DOM queries to suit
				yourself. You could also update the ordering live as a user enters data into a form by using an event handler calling <a href=
				"//datatables.net/reference/api/order()"><code class="api" title="DataTables API method">order()</code></a> or <a href=
				"//datatables.net/reference/api/draw()"><code class="api" title="DataTables API method">draw()</code></a> methods.</p>
			</div>
			<div class="demo-html">
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
								<option value="Edinburgh">
									Edinburgh
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
						/* Create an array with the values of all the input boxes in a column */
						$.fn.dataTable.ext.order['dom-text'] = function  ( settings, col )
						{
							return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
								return $('input', td).val();
							} );
						}

						/* Create an array with the values of all the input boxes in a column, parsed as numbers */
						$.fn.dataTable.ext.order['dom-text-numeric'] = function  ( settings, col )
						{
							return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
								return $('input', td).val() * 1;
							} );
						}

						/* Create an array with the values of all the select options in a column */
						$.fn.dataTable.ext.order['dom-select'] = function  ( settings, col )
						{
							return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
								return $('select', td).val();
							} );
						}

						/* Create an array with the values of all the checkboxes in a column */
						$.fn.dataTable.ext.order['dom-checkbox'] = function  ( settings, col )
						{
							return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
								return $('input', td).prop('checked') ? '1' : '0';
							} );
						}

						/* Initialise the table with the required column ordering data types */
						$(document).ready(function() {
							$('#example').DataTable( {
								&quot;columns&quot;: [
									null,
									{ &quot;orderDataType&quot;: &quot;dom-text-numeric&quot; },
									{ &quot;orderDataType&quot;: &quot;dom-text&quot;, type: 'string' },
									{ &quot;orderDataType&quot;: &quot;dom-select&quot; }
								]
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