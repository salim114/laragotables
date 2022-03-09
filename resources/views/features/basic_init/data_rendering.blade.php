<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables feature - Data rendering</title>	
    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="https://github.com/downloads/lafeber/world-flags-sprite/flags32.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">

	.f32 .flag {
		vertical-align: middle;
		margin: -8px 0;
	}

	progress {
		width: 100%;
	}

	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" class="init">
		
	$(document).ready(function() {
		$('#example').DataTable({
			ajax: '{{ asset('data/objects_salary.txt') }}',
			columns: [
				{
					data: 'name'
				},
				{
					data: 'position',
					render: function(data, type) {
						if (type === 'display') {
							let link = "http://datatables.net";

							if (data[0] < 'H') {
								link = "http://cloudtables.com";
							}
							else if (data[0] < 'S') {
								link = "http://editor.datatables.net";
							}

							return '<a href="' + link + '">' + data + '</a>';
						}
						
						return data;
					}
				},
				{
					className: 'f32', // used by world-flags-sprite library
					data: 'office',
					render: function(data, type) {
						if (type === 'display') {
							let country = '';

							switch (data) {
								case 'Argentina':
									country = 'ar';
									break;
								case 'Edinburgh':
									country = '_Scotland';
									break;
								case 'London':
									country = '_England';
									break;
								case 'New York':
								case 'San Francisco':
									country = 'us';
									break;
								case 'Sydney':
									country = 'au';
									break;
								case 'Tokyo':
									country = 'jp';
									break;
								case 'Algiers':
									country = 'dz';
									break;
							}

							return '<span class="flag ' + country + '"></span> ' + data;
						}

						return data;
					}
				},
				{
					data: 'extn',
					render: function(data, type, row, meta) {
						return type === 'display' ?
							'<progress value="' + data + '" max="9999"></progress>' :
							data;
					}
				},
				{
					data: "start_date"
				},
				{
					data: "salary",
					render: function(data, type) {
						var number = $.fn.dataTable.render.number( ',', '.', 2, '$'). display(data);

						if (type === 'display') {
							let color = 'green';
							if (data < 250000) {
								color = 'red';
							}
							else if (data < 500000) {
								color = 'orange';
							}

							return '<span style="color:' + color + '">' + number + '</span>';
						}
						
						return number;

					}
				}
			]
		});
	});

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Data rendering</span></h1>
			<div class="info">
				<p>Data within DataTables can be easily rendered to add graphics or colour to your tables, as demonstrated in the example on this page. These features make use of
				<a href="//datatables.net/reference/option/columns.render"><code class="option" title="DataTables initialisation option">columns.render</code></a> to customise the
				cells in three ways:</p>
				<ul class="markdown">
					<li>A flag is added to the <em>Office</em> column</li>
					<li>a HTML5 progress bar is added to the <em>Progress</em> column</li>
					<li>and the built-in number renderer is used to format the <em>Salary</em>.</li>
				</ul>
				<p>See the <a href="https://datatables.net/manual/data/renderers">data rendering manual page</a> for more details on how to use data renderers. Also, this example
				uses <a href="https://datatables.net/manual/ajax">Ajax to load the data</a>. More <a href="{{ url('features/ajax/index') }}">Ajax features are available</a>.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display nowrap" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Progress</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Progress</th>
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
								ajax: &quot;&#123;&#123; asset('data/objects_salary.txt') &#125;&#125;&quot;,
								columns: [
									{
										data: 'name'
									},
									{
										data: 'position',
										render: function(data, type) {
											if (type === 'display') {
												let link = &quot;http://datatables.net&quot;;

												if (data[0] &lt; 'H') {
													link = &quot;http://cloudtables.com&quot;;
												}
												else if (data[0] &lt; 'S') {
													link = &quot;http://editor.datatables.net&quot;;
												}

												return '&lt;a href=&quot;' + link + '&quot;&gt;' + data + '&lt;/a&gt;';
											}
											
											return data;
										}
									},
									{
										className: 'f32', // used by world-flags-sprite library
										data: 'office',
										render: function(data, type) {
											if (type === 'display') {
												let country = '';

												switch (data) {
													case 'Argentina':
														country = 'ar';
														break;
													case 'Edinburgh':
														country = '_Scotland';
														break;
													case 'London':
														country = '_England';
														break;
													case 'New York':
													case 'San Francisco':
														country = 'us';
														break;
													case 'Sydney':
														country = 'au';
														break;
													case 'Tokyo':
														country = 'jp';
														break;
												}

												return '&lt;span class=&quot;flag ' + country + '&quot;&gt;&lt;/span&gt; ' + data;
											}

											return data;
										}
									},
									{
										data: 'extn',
										render: function(data, type, row, meta) {
											return type === 'display' ?
												'&lt;progress value=&quot;' + data + '&quot; max=&quot;9999&quot;&gt;&lt;/progress&gt;' :
												data;
										}
									},
									{
										data: &quot;start_date&quot;
									},
									{
										data: &quot;salary&quot;,
										render: function(data, type) {
											var number = $.fn.dataTable.render.number( ',', '.', 2, '$'). display(data);

											if (type === 'display') {
												let color = 'green';
												if (data &lt; 250000) {
													color = 'red';
												}
												else if (data &lt; 500000) {
													color = 'orange';
												}

												return '&lt;span style=&quot;color:' + color + '&quot;&gt;' + number + '&lt;/span&gt;';
											}
											
											return number;

										}
									}
								]
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
						additional CSS used is shown below:</p>
						<code class="multiline language-css">
							.f32 .flag {
								vertical-align: middle;
								margin: -8px 0;
							}

							progress {
								width: 100%;
							}</code>
					</div>
					<p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>
					<ul>
						<li>
							<a href="{{ url('css/jquery.dataTables.css') }}">public/css/jquery.dataTables.css</a>
						</li>
						<li>
							<a href="https://github.com/downloads/lafeber/world-flags-sprite/flags32.css">https://github.com/downloads/lafeber/world-flags-sprite/flags32.css</a>
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