<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<title>DataTables examples - Server-side processing</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Server-side processing</span></h1>
			<div class="info">
				<p>There are many ways to get your data into DataTables, and if you are working with seriously large databases, you might want to consider using the server-side
				options that DataTables provides. With server-side processing enabled, all actions that DataTables performs (such as paging, searching and ordering) are handed off
				to a server where an SQL engine (or similar) can perform these actions on the large data set (after all, that's what the database engine is designed for!). As
				such, each draw of the table will result in a new Ajax request to get the required data.</p>
				<p>Server-side processing is enabled by setting the <a href="//datatables.net/reference/option/serverSide"><code class="option" title=
				"DataTables initialisation option">serverSide</code></a> option to <code>true</code> and providing an Ajax data source through the <a href=
				"//datatables.net/reference/option/ajax"><code class="option" title="DataTables initialisation option">ajax</code></a> option.</p>
				<p>The examples in this section show server-side processing in use and how it can be customised to suit your needs.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('examples') }}">Server-side</a></h3>
						<ul class="toc">
							<li>
		                        <a href="{{ url('examples/server_side/simple') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/custom_vars') }}">Custom HTTP variables</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/post') }}">POST data</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/return_search') }}">Return key to search</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/ids') }}">Automatic addition of row ID attributes</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/object_data') }}">Object data source</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/row_details') }}">Row details</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/select_rows') }}">Row selection</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/jsonp') }}">JSONP data source for remote domains</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/defer_loading') }}">Deferred loading of data</a>
		                    </li>
							<li>
		                        <a href="{{ url('examples/server_side/pipeline') }}">Pipelining data to reduce Ajax calls for paging</a>
		                    </li>
		                </ul>
					</div>
				</div>
				<div class="epilogue">
					<p>Please refer to the <a href="http://www.datatables.net">DataTables documentation</a> for full information about its API properties and methods.<br>
					Additionally, there are a wide range of <a href="http://www.datatables.net/extensions">extensions</a> and <a href=
					"http://www.datatables.net/plug_ins">plug_ins</a> which extend the capabilities of DataTables.</p>
					<p class="copyright">DataTables designed and created by <a href="http://www.sprymedia.co.uk">SpryMedia Ltd</a> © 2007-2022<br>
					DataTables is licensed under the <a href="http://www.datatables.net/mit">MIT license</a>.</p>
				</div>
			</div>
		</div>
	</section>
</body>
</html>