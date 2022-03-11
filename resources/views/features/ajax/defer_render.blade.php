<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Deferred rendering for speed</title>
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
			"ajax": "{{ asset('data/arrays.txt') }}",
			"deferRender": true
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Deferred rendering for speed</span></h1>
			<div class="info">
				<p>When working with large data sources, you might seek to improve the speed at which DataTables runs. One method to do this is to make use of the built-in
				deferred rendering option in DataTables with the <a href="//datatables.net/reference/option/deferRender"><code class="option" title=
				"DataTables initialisation option">deferRender</code></a> option.</p>
				<p>When deferred rendering is enabled, rather than having DataTables create all <code class="tag" title="HTML tag">TR</code> and <code class="tag" title=
				"HTML tag">TD</code> nodes required for the table when the data is loaded, DataTables will only create the nodes required for each individual row at the time of
				that row being drawn on the page (these nodes are then retained in case they are needed again so they aren't created multiple times). This can give a significant
				performance increase, since a lot less work is done at initialisation time.</p>
				<p>The example below shows DataTables with deferred rendering enabled. For this small example you'll likely notice no difference, but larger tables can benefit
				significantly from simply enabling this parameter.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Extn.</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Extn.</th>
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
							$('#example').DataTable( {
								&quot;ajax&quot;: &quot;&#123;&#123; asset('data/arrays.txt') &#125;&#125;&quot;,
								&quot;deferRender&quot;: true
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