<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">

	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<title>DataTables features - Basic initialisation</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Basic initialisation</span></h1>
			<div class="info">
				<p>DataTables is a simple-to-use jQuery plug-in with a huge range of customisable options. The features in this section demonstrate basic initialisation of
				DataTables and how it can be easily customised by passing an object with the options you want.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features') }}">Basic initialisation</a></h3>
		                <ul class="toc active">
		                    <li> 
		                        <a href="{{ url('features/basic_init/zero_configuration') }}">Zero configuration</a> 
		                    </li>          
		                    <li>
		                        <a href="{{ url('features/basic_init/filter_only') }}">Feature enable / disable</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/table_sorting') }}">Default ordering (sorting)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/multi_col_sort') }}">Multi-column ordering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/multiple_tables') }}">Multiple tables</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/hidden_columns') }}">Hidden columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/complex_header') }}">Complex headers (rowspan and colspan)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/dom') }}">DOM positioning</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/flexible_width') }}">Flexible table width</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/state_save') }}">State saving</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/data_rendering') }}">Data rendering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/alt_pagination') }}">Alternative pagination</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/scroll_y') }}">Scroll - vertical</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/scroll_y_dynamic') }}">Scroll - vertical, dynamic height</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/scroll_x') }}">Scroll - horizontal</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/scroll_xy') }}">Scroll - horizontal and vertical</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/comma_decimal') }}">Language - Comma decimal place</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/language') }}">Language options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/basic_init/stocks') }}">Example of stocks results</a>
		                    </li>
		                </ul>
					</div>
				</div>
				<div class="epilogue">
					<p>Please refer to the <a href="http://www.datatables.net">DataTables documentation</a> for full information about its API properties and methods.<br>
					Additionally, there are a wide range of <a href="http://www.datatables.net/extensions">extensions</a> and <a href=
					"https://www.datatables.net/plug-ins/index">plug_ins</a> which extend the capabilities of DataTables.</p>
					<p class="copyright">DataTables designed and created by <a href="http://www.sprymedia.co.uk">SpryMedia Ltd</a> © 2007-2022<br>
					DataTables is licensed under the <a href="https://datatables.net/license/mit">MIT license</a>.</p>
				</div>
			</div>
		</div>
	</section>
</body>
</html>