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
	<title>DataTables features - Advanced initialisation</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Advanced initialisation</span></h1>
			<div class="info">
				<p>The configuration options offered by DataTables extend much further than the options shown in the basic initialisation of this documentation. Through
				combinations of the options available and the use of callbacks, DataTables is completely customisable and will fit into exactly what you need for your table
				display.</p>
				<p>This section shows some more advanced initialisation options. Keep in mind also that each example can be combined with the other features to get what you
				want!</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features') }}">Advanced initialisation</a></h3>
						<ul class="toc">
							<li>
		                        <a href="{{ url('features/advanced_init/events_live') }}">DOM / jQuery events</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dt_events') }}">DataTables events</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/column_render') }}">Column rendering</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/enter_search') }}">Enter Key to Search</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/length_menu') }}">Page length options</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_multiple_elements') }}">Multiple table control elements</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/complex_header') }}">Complex headers with column visibility</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/object_dom_read') }}">Read HTML to data objects</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/html5_data_attributes') }}">HTML5 data-* attributes - cell data</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/html5_data_options') }}">HTML5 data-* attributes - table options</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/language_file') }}">Language file</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/defaults') }}">Setting defaults</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">Row created callback</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Row grouping</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/footer_callback') }}">Footer callback</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_toolbar') }}">Custom toolbar elements</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/sort_direction_control') }}">Order direction sequence control</a>
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