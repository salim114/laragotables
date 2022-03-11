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
	<title>DataTables features - API</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>API</span></h1>
			<div class="info">
				<p>The real power of DataTables can be exploited through the use of the API that it presents. The DataTables API is designed to be simple, consistent and easy to
				use. The features in this section show how the API may be used.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features') }}">API</a></h3>
						<ul class="toc">
							<li>
		                        <a href="{{ url('features/api/add_row') }}">Add rows</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/multi_filter') }}">Individual column searching (text inputs)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/multi_filter_select') }}">Individual column searching (select inputs)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/highlight') }}">Highlighting rows and columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/row_details') }}">Child rows (show extra / detailed information)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/row_details_stateSave') }}">Child rows with StateSave</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/select_row') }}">Row selection (multiple rows)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/select_single_row') }}">Row selection and deletion (single row)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/form') }}">Form inputs</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/counter_columns') }}">Index column</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/show_hide') }}">Show / hide columns dynamically</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/api_in_init') }}">Using API in callbacks</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/tabs_and_scrolling') }}">Scrolling and Bootstrap tabs</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/regex') }}">Search API (regular expressions)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/api/highcharts') }}">HighCharts Integration</a>
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