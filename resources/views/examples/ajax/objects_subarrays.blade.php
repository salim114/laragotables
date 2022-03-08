<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables example - Nested object data (arrays)</title>
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
			"ajax": "{{ asset('data/objects_subarrays.txt') }}",
			"columns": [
				{ "data": "name[, ]" },
				{ "data": "hr.0" },
				{ "data": "office" },
				{ "data": "extn" },
				{ "data": "hr.2" },
				{ "data": "hr.1" }
			]
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Nested object data (arrays)</span></h1>
			<div class="info">
				<p>The information read from an Ajax data source can be arbitrarily complex, but still be displayed by DataTables through the <a href=
				"//datatables.net/reference/option/columns.data"><code class="option" title="DataTables initialisation option">columns.data</code></a> option, which is
				particularly useful for working with JSON feeds in an already defined format.</p>
				<p>The <a href="//datatables.net/reference/option/columns.data"><code class="option" title="DataTables initialisation option">columns.data</code></a> option has
				the ability to read information not only from objects, but also from arrays using the same dotted object syntax as for objects. In addition to this, when working
				with an array data source <a href="//datatables.net/reference/option/columns.data"><code class="option" title=
				"DataTables initialisation option">columns.data</code></a> can process the data to combine and display the data in simple forms (more complex forms can be defined
				by using <a href="//datatables.net/reference/option/columns.data"><code class="option" title="DataTables initialisation option">columns.data</code></a> as a
				function).</p>
				<p>This example shows two different aspects of using <a href="//datatables.net/reference/option/columns.data"><code class="option" title=
				"DataTables initialisation option">columns.data</code></a> to read arrays:</p>
				<ul class="markdown">
					<li>The <em>Name</em> column is sourced from an array of two elements (first and last name), which are automatically concatenated together. This is done by
					using array bracket syntax, with the characters between the brackets being used as the glue between elements (e.g. <code>name[, ]</code>).</li>
					<li>The <em>Position</em>, <em>Start date</em> and <em>Salary</em> columns are read directly from array elements using dotted object notation (e.g.
					<code>hr.0</code>). Note that the order in which the data can be used in the columns does not have to match the order in which it is defined in the data
					source. The structure of the row's data source in this example is:</li>
				</ul>
				<pre><code class="multiline">{
	"name": [
		"Nixon",
		"Tiger"
	],
	"hr": [
		"System Architect",
		"$3,120",
		"2011/04/25"
	],
	"office": "Edinburgh",
	"extn": "5421"
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
								&quot;ajax&quot;: &quot;&#123;&#123; asset('data/objects_subarrays.txt') &#125;&#125;&quot;,
								&quot;columns&quot;: [
									{ &quot;data&quot;: &quot;name[, ]&quot; },
									{ &quot;data&quot;: &quot;hr.0&quot; },
									{ &quot;data&quot;: &quot;office&quot; },
									{ &quot;data&quot;: &quot;extn&quot; },
									{ &quot;data&quot;: &quot;hr.2&quot; },
									{ &quot;data&quot;: &quot;hr.1&quot; }
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