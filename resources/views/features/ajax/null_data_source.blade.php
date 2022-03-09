<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables example - Generated content for a column</title>
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
		var table = $('#example').DataTable( {
			"ajax": "{{ asset('data/arrays.txt') }}",
			"columnDefs": [ {
				"targets": -1,
				"data": null,
				"defaultContent": "<button>Click!</button>"
			} ]
		} );

		$('#example tbody').on( 'click', 'button', function () {
			var data = table.row( $(this).parents('tr') ).data();
			alert( data[0] +"'s salary is: "+ data[ 5 ] );
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Generated content for a column</span></h1>
			<div class="info">
				<p>In some tables you might wish to have some content generated automatically. This can be done in a number of ways:</p>
				<ul class="markdown">
					<li>
						<a href="//datatables.net/reference/option/columns.render"><code class="option" title="DataTables initialisation option">columns.render</code></a> for
						content that is dynamic (i.e. based upon the row's data)
					</li>
					<li>
						<a href="//datatables.net/reference/option/columns.defaultContent"><code class="option" title=
						"DataTables initialisation option">columns.defaultContent</code></a> for static content (i.e. simple strings)
					</li>
				</ul>
				<p>This features shows the use of <a href="//datatables.net/reference/option/columns.defaultContent"><code class="option" title=
				"DataTables initialisation option">columns.defaultContent</code></a> to create a <em>button</em> element in the last column of the table. A simple jQuery
				<code>click</code> event listener is used to watch for clicks on the row, and when activated uses the <a href=
				"//datatables.net/reference/api/row().data()"><code class="api" title="DataTables API method">row().data()</code></a> method to get the data for the row and show a
				bit of information about it in an <code>alert</code> box. This is a simple use case, but it can be built up to be arbitrarily complex.</p>
				<p>Note also that the <a href="//datatables.net/reference/option/columns.data"><code class="option" title=
				"DataTables initialisation option">columns.data</code></a> option for the column has been set to <code>null</code> to indicate that the column has no information
				contained in the data source object.</p>
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
							var table = $('#example').DataTable( {
								&quot;ajax&quot;: &quot;&#123;&#123; asset('data/arrays.txt') &#125;&#125;&quot;,
								&quot;columnDefs&quot;: [ {
									&quot;targets&quot;: -1,
									&quot;data&quot;: null,
									&quot;defaultContent&quot;: &quot;&lt;button&gt;Click!&lt;/button&gt;&quot;
								} ]
							} );

							$('#example tbody').on( 'click', 'button', function () {
								var data = table.row( $(this).parents('tr') ).data();
								alert( data[0] +&quot;'s salary is: &quot;+ data[ 5 ] );
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