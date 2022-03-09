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
	<title>DataTables features - plug_ins</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>plug_ins</span></h1>
			<div class="info">
				<p>While DataTables has a wide range of options and data type support built in, it can never cater for every type of data out of the box. For this reason,
				DataTables exposes an extension API which allows you, the developers using DataTables, to add support for your own data types, searching, ordering and feature
				plug_ins.</p>
				<p>The features in this section show how plug_ins can be used and developed for DataTables.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features') }}">plug_ins</a></h3>
						<ul class="toc">
							<li>
		                        <a href="{{ url('features/plug_ins/api') }}">API plug-in methods</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/plug_ins/sorting_auto') }}">Ordering plug_ins (with type detection)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/plug_ins/sorting_manual') }}">Ordering plug_ins (no type detection)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/plug_ins/range_filtering') }}">Custom filtering - range search</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/plug_ins/dom_sort') }}">Live DOM ordering</a>
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