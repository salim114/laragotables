<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables feature - Nested object data (objects)</title>
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
			"processing": true,
			"ajax": "{{ asset('data/objects_deep.txt') }}",
			"columns": [
				{ "data": "name" },
				{ "data": "hr.position" },
				{ "data": "contact.0" },
				{ "data": "contact.1" },
				{ "data": "hr.start_date" },
				{ "data": "hr.salary" }
			]
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Nested object data (objects)</span></h1>
			<div class="info">
				<p>DataTables has the ability to use data from almost any JSON data source through the use of the <a href=
				"//datatables.net/reference/option/columns.data"><code class="option" title="DataTables initialisation option">columns.data</code></a> option. In its simplest
				case, it can be used to read arbitrary object properties, but can also be extended to <em>n</em> levels of nested objects / arrays through the use of standard
				Javascript dotted object notation. Each dot (<code>.</code>) in the <a href="//datatables.net/reference/option/columns.data"><code class="option" title=
				"DataTables initialisation option">columns.data</code></a> option represents another object level.</p>
				<p>In this example <code>hr.position</code> refers to the <code>position</code> property of the <code>hr</code> object in the row's data source object, while
				<code>contact.0</code> refers to the first element of the <code>contact</code> array. Any number of dots can be used to obtain deeply nested data.</p>
				<p>The example below shows DataTables reading information for the columns from nested objects and arrays, where the structure of the row's data source in this
				example is:</p>
				<pre><code class="multiline">{
	"name": "Tiger Nixon",
	"hr": {
		"position": "System Architect",
		"salary": "$3,120",
		"start_date": "2011/04/25"
	},
	"contact": [
		"Edinburgh",
		"5421"
	]
}
</code></pre>
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
								&quot;processing&quot;: true,
								&quot;ajax&quot;: &quot;&#123;&#123; asset('data/objects_deep.txt') &#125;&#125;&quot;,
								&quot;columns&quot;: [
									{ &quot;data&quot;: &quot;name&quot; },
									{ &quot;data&quot;: &quot;hr.position&quot; },
									{ &quot;data&quot;: &quot;contact.0&quot; },
									{ &quot;data&quot;: &quot;contact.1&quot; },
									{ &quot;data&quot;: &quot;hr.start_date&quot; },
									{ &quot;data&quot;: &quot;hr.salary&quot; }
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