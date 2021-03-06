<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<title>DataTables features - Ajax sourced data</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Ajax sourced data</span></h1>
			<div class="info">
				<p>DataTables can read data from a server via Ajax, while still performing searching, ordering, paging etc on the client-side. This is done through use of the
				<a href="//datatables.net/reference/option/ajax"><code class="option" title="DataTables initialisation option">ajax</code></a> option, which has a number of
				options to customise how the data is retrieved from the server.</p>
				<p>The features in this section demonstrate the use of Ajax loading data in DataTables, with client-side processing.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features') }}">Ajax</a></h3>
						<ul class="toc">
							<li>
		                        <a href="{{ url('features/ajax/simple') }}">Ajax data source (arrays)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/ajax/objects') }}">Ajax data source (objects)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/ajax/deep') }}">Nested object data (objects)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/ajax/objects_subarrays') }}">Nested object data (arrays)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/ajax/orthogonal_data') }}">Orthogonal data</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/ajax/null_data_source') }}">Generated content for a column</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/ajax/custom_data_property') }}">Custom data source property</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/ajax/custom_data_flat') }}">Flat array data source</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/ajax/defer_render') }}">Deferred rendering for speed</a>
		                    </li>
		                </ul>
					</div>
				</div>
				<div class="epilogue">
					<p>Please refer to the <a href="http://www.datatables.net">DataTables documentation</a> for full information about its API properties and methods.<br>
					Additionally, there are a wide range of <a href="http://www.datatables.net/extensions">extensions</a> and <a href=
					"https://www.datatables.net/plug-ins/index">plug_ins</a> which extend the capabilities of DataTables.</p>
					<p class="copyright">DataTables designed and created by <a href="http://www.sprymedia.co.uk">SpryMedia Ltd</a> ?? 2007-2022<br>
					DataTables is licensed under the <a href="https://datatables.net/license/mit">MIT license</a>.</p>
				</div>
			</div>
		</div>
	</section>
</body>
</html>