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
	<title>DataTables features - Data sources</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Data sources</span></h1>
			<div class="info">
				<p>DataTables can obtain data from four different fundamental sources:</p>
				<ul class="markdown">
					<li>HTML document (DOM)</li>
					<li>Javascript (array / objects)</li>
					<li>Ajax sourced data with client-side processing</li>
					<li>Ajax sourced data with server-side processing</li>
				</ul>
				<p>Which of these options is used to populate the table data depends upon how the table is initialised. The features in this section show these four different data
				source types.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features') }}">Data sources</a></h3>
						<ul class="toc">
							<li>
		                        <a href="{{ url('features/data_sources/dom') }}">HTML (DOM) sourced data</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/data_sources/ajax') }}">Ajax sourced data</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/data_sources/js_array') }}">Javascript sourced data</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/data_sources/server_side') }}">Server-side processing</a>
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