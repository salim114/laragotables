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
	<title>DataTables features - features index</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>features index</span></h1>
			<div class="info">
				<p>One of the best ways to learn how to do anything new (including software APIs!) is to get your hands dirty as quickly as possible. These features will show you
				how to perform tasks ranging from something as simple as applying DataTables to an HTML table, right the way through to doing server-side processing with
				pipelining and custom plug-in functions.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features/basic_init') }}">Basic initialisation</a></h3>
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
		                </ul>
		            </div>
		            <div class="toc-group">
		                <h3><a href="{{ url('features/non_jquery') }}">Non-jQuery initialisation</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/non_jquery/init') }}">Non-jQuery initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Options</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dom_events') }}">DOM events</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">DataTables events</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Ajax data source (objects)</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		                <h3><a href="{{ url('features/advanced_init') }}">Advanced initialisation</a></h3>
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
							<!-- <li>
		                        <a href="{{ url('features/advanced_init/language_file') }}">Language file</a>
		                    </li> -->
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
							<li>
		                        <a href="{{ url('features/basic_init/stocks') }}">Example of stocks results</a>
		                    </li>
		                </ul>
		            </div>	
		            <div class="toc-group">
		                <h3><a href="{{ url('features/data_sources') }}">Data sources</a></h3>
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
		            <div class="toc-group">
		                <h3><a href="{{ url('features/i18n') }}">Internationalisation</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/i18n/options') }}">Language options</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/i18n/ajax') }}">Remote language file</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/i18n/ajax+local') }}">Remote language file + local definitions</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/i18n/numbers') }}">Locale based number display</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/i18n/datetime') }}">Auto-locale display</a>
		                    </li>
		                </ul>
		            </div>    
		            <div class="toc-group">
		                <h3><a href="{{ url('features/datetime') }}">DateTime</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/datetime/iso8601') }}">ISO8601 detection</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/datetime/auto_locale_moment') }}">Auto-locale display (Moment.js)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/datetime/auto_locale_luxon') }}">Auto-locale display (Luxon)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/datetime/formatting_moment') }}">Date rendering (Moment.js)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/datetime/formatting_luxon') }}">Date rendering (Luxon)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/datetime/transform_moment') }}">Format transform (Moment.js)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/datetime/transform_luxon') }}">Format transform (Luxon)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/datetime/order_moment') }}">Ordering formatted dates (Moment.js)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/datetime/order_luxon') }}">Ordering formatted dates (Luxon)</a>
		                    </li>
		                </ul>
		            </div>         
		            <div class="toc-group">
		                <h3><a href="{{ url('features/styling') }}">Styling</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/styling/display') }}">Base style</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/no_classes') }}">Base style - no styling classes</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/cell_border') }}">Base style - cell borders</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/compact') }}">Base style - compact</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/hover') }}">Base style - hover</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/order_column') }}">Base style - order_column</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/row_border') }}">Base style - row borders</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/stripe') }}">Base style - stripe</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/foundation') }}">Foundation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/bulma') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/jqueryUI') }}">jQuery UI ThemeRoller</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/material') }}">Material Design (Tech. preview)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/uikit') }}">UIKit 3 (Tech. preview)</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		                <h3><a href="{{ url('features/api') }}">API</a></h3>
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
		            <div class="toc-group">
		                <h3><a href="{{ url('features/ajax') }}">Ajax</a></h3>
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
		            <div class="toc-group">
		                <h3><a href="{{ url('features/server_side') }}">Server-side</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/server_side/simple') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/server_side/custom_vars') }}">Custom HTTP variables</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/server_side/post') }}">POST data</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/server_side/return_search') }}">Return key to search</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/server_side/ids') }}">Automatic addition of row ID attributes</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/server_side/object_data') }}">Object data source</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/server_side/row_details') }}">Row details</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/server_side/jsonp') }}">JSONP data source for remote domains</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/server_side/defer_loading') }}">Deferred loading of data</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/server_side/pipeline') }}">Pipelining data to reduce Ajax calls for paging</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">Plug-ins</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/plug_ins/api') }}">API plug-in methods</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/plug_ins/sorting_auto') }}">Ordering plug-ins (with type detection)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/plug_ins/sorting_manual') }}">Ordering plug-ins (no type detection)</a>
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
		            "https://www.datatables.net/plug-ins/index">plug-ins</a> which extend the capabilities of DataTables.</p>
		            <p class="copyright">DataTables designed and created by <a href="http://www.sprymedia.co.uk">SpryMedia Ltd</a> © 2007-2022<br>
		            DataTables is licensed under the <a href="https://datatables.net/license/mit">MIT license</a>.</p>
		        </div>
			</div>
		</div>
	</section>
</body>
</html>