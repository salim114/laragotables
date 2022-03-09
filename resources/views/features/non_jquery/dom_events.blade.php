<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables example - DOM events</title>
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
	
	// For the example - show interactions with the table
	var eventFired = function ( type ) {
		var n = document.querySelector('#demo_info');
		n.innerHTML += '<div>'+type+' event - '+new Date().getTime()+'</div>';
		n.scrollTop = n.scrollHeight;      
	}

	document.addEventListener('DOMContentLoaded', function () {
		let table = new DataTable('#example');

		document
			.querySelector('#example tbody')
			.addEventListener('click', function (e) {
				var data = table.row( e.target ).data();
				
				eventFired( 'You clicked on '+data[0]+'\'s row' );
			});
	});

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>DOM events</span></h1>
			<div class="info">
				<p>This simple example shows how to listen for DOM events (such as <code>click</code> shown in this example) to be informed when the end user interacts with the
				table. Here we use <a href="https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener"><code>addEventListener</code></a> on the <code class=
				"tag" title="HTML tag">tbody</code> of the table, making use of the <code>e.target</code> property of the event to know exactly which element was clicked on inside
				the table body, and using the <a href="//datatables.net/reference/api/row().data()"><code class="api" title="DataTables API method">row().data()</code></a> method
				to get the data for that row.</p>
				<p>It is important to use this method rather than simply selecting the <code class="tag" title="HTML tag">tr</code> table rows, since DataTables will dynamically
				add and remove rows from the table, displaying them only when required by paging, ordering and search states.</p>
			</div>
			<div class="demo-html">
				<div id="demo_info" class="box"></div>
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
						// For the example - show interactions with the table
						var eventFired = function ( type ) {
							var n = document.querySelector('#demo_info');
							n.innerHTML += '&lt;div&gt;'+type+' event - '+new Date().getTime()+'&lt;/div&gt;';
							n.scrollTop = n.scrollHeight;      
						}

						document.addEventListener('DOMContentLoaded', function () {
							let table = new DataTable('#example');

							document
								.querySelector('#example tbody')
								.addEventListener('click', function (e) {
									var data = table.row( e.target ).data();
									
									eventFired( 'You clicked on '+data[0]+'\'s row' );
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
			</div>
		</section>
	</div>
	<section>
		@include('layouts.footer')	
	</section>
</body>
</html>