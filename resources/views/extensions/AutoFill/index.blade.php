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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<title>DataTables extensions - AutoFill</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables extensions <span>AutoFill</span></h1>
			<div class="info">
				<p>Spreadsheets such as Excel and Google Docs have a very handy rapid data duplication auto fill UI method. The AutoFill library for DataTables provides a similar interface for DataTables (even extending upon it to provide complex data interaction options). AutoFill also provides full support for Editor allowing end users to update data very quickly.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features/basic_init') }}"><i class="fa fa-arrow-circle-right"></i> AutoFill</a></h3>
						<h3 class="tx">Initialisation</h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('features/basic_init/zero_configuration') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('features/basic_init/filter_only') }}">Fill types</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/table_sorting') }}">KeyTable integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/multi_col_sort') }}">Events</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/multiple_tables') }}">Always confirm action</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/hidden_columns') }}">Column selector</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/complex_header') }}">Click focus</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/dom') }}">Scrolling DataTable</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/flexible_width') }}">Fill plug-ins</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/state_save') }}">Enable / disable API</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/data_rendering') }}">Disable horizontal fill</a>
		                    </li>
		                    <h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('features/basic_init/alt_pagination') }}">Bootstrap 3 styling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/scroll_y') }}">Bootstrap 4 styling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/scroll_y_dynamic') }}">Bootstrap 5 styling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/scroll_x') }}">Foundation styling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/scroll_xy') }}">Bulma styling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/comma_decimal') }}">Fomantic-UI (formally Semantic-UI) styling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/language') }}">jQuery UI styling</a>
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