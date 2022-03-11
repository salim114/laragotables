<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - DOM positioning</title>
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
			"dom": '<"top"i>rt<"bottom"flp><"clear">'
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>DOM positioning</span></h1>
			<div class="info">
				<p>When customising DataTables for your own usage, you might find that the default position of the feature elements (filter input etc) is not quite to your liking.
				To address this issue DataTables takes inspiration from the CSS 3 Advanced Layout Module and provides the <a href=
				"//datatables.net/reference/option/dom"><code class="option" title="DataTables initialisation option">dom</code></a> initialisation parameter which can be set to
				indicate where you wish particular features to appear in the DOM. You can also specify <code>div</code> wrapping containers (with an id and / or class) to provide
				complete layout flexibility.</p>
				<p>Each HTML control element presented by DataTables is denoted by a single character in the <a href="//datatables.net/reference/option/dom"><code class="option"
				title="DataTables initialisation option">dom</code></a> option. For example the <code>l</code> option is used for the <code>L</code>ength changing input
				option.</p>
				<p>The built-in options available are:</p>
				<ul class="markdown">
					<li><code>l</code> - <code>L</code>ength changing</li>
					<li><code>f</code> - <code>F</code>iltering input</li>
					<li><code>t</code> - The <code>T</code>able!</li>
					<li><code>i</code> - <code>I</code>nformation</li>
					<li><code>p</code> - <code>P</code>agination</li>
					<li><code>r</code> - p<code>R</code>ocessing</li>
					<li><code>&lt;</code> and <code>&gt;</code> - div elements</li>
					<li><code>&lt;"#id"</code> and <code>&gt;</code> - div with an id</li>
					<li><code>&lt;"class"</code> and <code>&gt;</code> - div with a class</li>
					<li><code>&lt;"#id.class"</code> and <code>&gt;</code> - div with an id and class</li>
				</ul>
				<p>Example 1:</p>
				<pre><code class="multiline">&lt;"wrapper"flipt&gt;</code></pre>
				<p>This results in the following DOM structure:</p>
				<pre><code class="multiline">&lt;div class="wrapper"&gt;
	{ filter }
	{ length }
	{ info }
	{ paging }
	{ table }
&lt;/div&gt;
</code></pre>
				<p>Example 2:</p>
				<pre><code class="multiline">&lt;lf&lt;t&gt;ip&gt;
</code></pre>
				<p>This results in the following DOM structure:</p>
				<pre><code class="multiline">&lt;div&gt;
	{ length }
	{ filter }
	&lt;div&gt;
		{ table }
	&lt;/div&gt;
	{ info }
	{ paging }
&lt;/div&gt;
</code></pre>
				<p>All options (with the exception of the <code>t</code> (table) option can be specified multiple times, for if you want to show the same control multiple times
				(pagination at the top and bottom of the table for example).</p>
				<p>Furthermore, note that additional <a href="//datatables.net/reference/option/dom"><code class="option" title="DataTables initialisation option">dom</code></a>
				options can be added to DataTables <a href="https://datatables.net/manual/plug_ins/features">through the use of plug_ins</a>.</p>
				<p>In the example below, the table information is moved to the top of the table, and all the interaction elements to the bottom, each wrapper in a container
				<code>div</code>.</p>
			</div>
			<div class="demo-html">
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
						$(document).ready(function() {
							$('#example').DataTable( {
								&quot;dom&quot;: '&lt;&quot;top&quot;i&gt;rt&lt;&quot;bottom&quot;flp&gt;&lt;&quot;clear&quot;&gt;'
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