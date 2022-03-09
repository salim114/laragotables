<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">

	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<title>DataTables extensions - extensions index</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables extensions <span>extensions index</span></h1>
			<div class="info">
				<p>The features that DataTables provides can be greatly enhanced by the use of the plug-ins available on this page, which give many new user interaction and configuration options.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features/basic_init') }}">AutoFill</a></h3>
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
		            <div class="toc-group">
		                <h3><a href="{{ url('features/advanced_init') }}">Buttons</a></h3>
		                <h3 class="tx">Basic initialisation</h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/advanced_init/events_live') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dt_events') }}">File export</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/column_render') }}">Custom button</a>
		                    </li>
		                    							<li>
		                        <a href="{{ url('features/advanced_init/events_live') }}">Class names</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dt_events') }}">Keyboard activation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/column_render') }}">Collections</a>
		                    </li>
		                    							<li>
		                        <a href="{{ url('features/advanced_init/events_live') }}">Multi-level collections</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dt_events') }}">Auto close collection</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/column_render') }}">Plug-ins</a>
		                    </li>
		                    							<li>
		                        <a href="{{ url('features/advanced_init/events_live') }}">`new` initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dt_events') }}">Multiple button groups</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/column_render') }}">Page length (button)</a>
		                    </li>
		                    							<li>
		                        <a href="{{ url('features/advanced_init/events_live') }}">Page length (select)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dt_events') }}">Custom HTML in Buttons Collection</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/column_render') }}">Select integration - export selected rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/column_render') }}">Space between buttons</a>
		                    </li>
		                    <h3 class="tx">HTML 5 data export</h3>
							<li>
		                        <a href="{{ url('features/advanced_init/enter_search') }}">Export titles and messages</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/length_menu') }}">HTML5 export buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_multiple_elements') }}">Include footer in export</a>
		                    </li>
		                    							<li>
		                        <a href="{{ url('features/advanced_init/enter_search') }}">Tab separated values</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/length_menu') }}">File name</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_multiple_elements') }}">Copy button internationalisation</a>
		                    </li>
		                    							<li>
		                        <a href="{{ url('features/advanced_init/enter_search') }}">Column selectors</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/length_menu') }}">Format output data - orthogonal data</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_multiple_elements') }}">Format output data - export options</a>
		                    </li>
		                    							<li>
		                        <a href="{{ url('features/advanced_init/enter_search') }}">Excel - auto filter</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/length_menu') }}">Excel - Bold text</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_multiple_elements') }}">Excel - Cell background</a>
		                    </li>
		                    							<li>
		                        <a href="{{ url('features/advanced_init/enter_search') }}">Excel - Customise borders</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/length_menu') }}">PDF - message</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_multiple_elements') }}">PDF - page size and orientation</a>
		                    </li>
		                    							<li>
		                        <a href="{{ url('features/advanced_init/enter_search') }}">PDF - image</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/length_menu') }}">PDF - open in new window</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_multiple_elements') }}">Custom file (JSON)</a>
		                    </li>
		                    <h3 class="tx">Column visibility</h3>
							<li>
		                        <a href="{{ url('features/advanced_init/complex_header') }}">Basic column visibility</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/object_dom_read') }}">Multi-column layout</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/html5_data_attributes') }}">Customisation of column button text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/complex_header') }}">Internationalisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/object_dom_read') }}">Restore column visibility</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/html5_data_attributes') }}">Select columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/complex_header') }}">Visibility toggle buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/object_dom_read') }}">Column groups</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/html5_data_attributes') }}">State saving</a>
		                    </li>
		                    <h3 class="tx">Print</h3>
							<li>
		                        <a href="{{ url('features/advanced_init/html5_data_options') }}">Print button</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/language_file') }}">Custom message</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/defaults') }}">Export options - column selector</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/html5_data_options') }}">Export options - row selector</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/language_file') }}">Disable auto print</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/defaults') }}">Customisation of the print view window</a>
		                    </li>
		                    <h3 class="tx">API</h3>
							<li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">Enable / disable</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Dynamic text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">Adding and removing buttons dynamically</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Group selection</a>
		                    </li>
		                    <h3 class="tx">Split buttons</h3>
							<li>
		                        <a href="{{ url('features/advanced_init/footer_callback') }}">Split Dropdown Button</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Foundation styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">jQuery UI styling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Semantic UI styling</a>
		                    </li>
		                    <h3 class="tx">Styling</h3>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">Bootstrap 5</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Foundation styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">jQuery UI styling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Fomantic-UI (formally Semantic-UI) styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_toolbar') }}">Icons</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/dom_toolbar') }}">Dropup collection</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		                <h3><a href="{{ url('features/non_jquery') }}">ColReorder</a></h3>
		                <h3 class="tx">Initialisation and options</h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/non_jquery/init') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Scrolling table</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Predefined column ordering</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Realtime updating</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Individual column filtering</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Initialisation using `new`</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Enable / disable API</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Reset ordering API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Footer callback</a>
		                    </li>							
		                    <h3 class="tx">Integration with other DataTables extensions</h3>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Column visibility integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">FixedColumns integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">FixedHeader integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Responsive integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">State saving</a>
		                    </li>
		                    <h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Alternative insert styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 4 styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 5 styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Foundation styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bulma styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Fomantic-UI (formally Semantic-UI) styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">jQuery UI styling</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		                <h3><a href="{{ url('features/styling') }}">Editor</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Introduction</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		                <h3><a href="{{ url('features/data_sources') }}">FixedColumns</a></h3>
		                <h3 class="tx">Initialisation and options</h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/non_jquery/init') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Buttons initialisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Multiple fixed columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">DataTables API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Right column only</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Left and right fixed columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Only Horizontal Scrolling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Column visibility integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Server-side processing</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">CSS row sizing</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Assigned column width</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Fluid column width</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Index column</a>
		                    </li>						
		                    <h3 class="tx">Integration with other DataTables extensions</h3>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">RowReorder</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">AutoFill</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">FixedHeader integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Select - checkboxes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Select - whole row</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">DataTables API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">FixedHeader/a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">FixedHeader with Footer</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">KeyTable</a>
		                    </li>
		                    <h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Complex headers</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Individual column filtering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Right-to-left text direction</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Fomantic-UI (formally Semantic-UI) styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">jQuery UI</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bulma</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		                <h3><a href="{{ url('features/api') }}">FixedHeader</a></h3>
		                <h3 class="tx">Initialisation and options</h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/non_jquery/init') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Header and footer fixed</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Multiple tables</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Offset - automatic</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Offset - manual</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Scrolling Table</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Horizontal page scrolling</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Enable / disable FixedHeader</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Show / hide FixedHeader</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Column filtering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Alternative initialisation</a>
		                    </li>												
		                    <h3 class="tx">Integration with other DataTables extensions</h3>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Responsive integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Responsive integration (Bootstrap)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">RowGroup</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Scroller</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">ColReorder integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Buttons columns visibility integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">FixedColumns</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Column filtering</a>
		                    </li>
		                    <h3 class="tx">Styling</h3>
							
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bulma</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Fomantic-UI (formally Semantic-UI) styling</a>
		                    </li>	                    		                    
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">jQuery UI styling</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		                <h3><a href="{{ url('features/ajax') }}">KeyTable</a></h3>
		                <h3 class="tx">Initialisation</h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('features/basic_init/zero_configuration') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('features/basic_init/filter_only') }}">Events</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/table_sorting') }}">Scrolling table</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/multi_col_sort') }}">Scroller integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/multiple_tables') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/hidden_columns') }}">State saving</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/basic_init/complex_header') }}">Keep focus (no blur)</a>
		                    </li>
							<h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('features/basic_init/alt_pagination') }}">Focus cell custom styling</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('features/basic_init/comma_decimal') }}">Bootstrap styling</a>
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
		                        <a href="{{ url('features/basic_init/language') }}">jQuery UI styling</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('features/basic_init/comma_decimal') }}">Fomantic-UI (formally Semantic-UI) styling</a>
		                    </li>
		                </ul>
		            </div>
		            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		            <div class="toc-group">
		                <h3><a href="{{ url('features/server_side') }}">Select</a></h3>
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
		                        <a href="{{ url('features/server_side/select_rows') }}">Row selection</a>
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
		                <h3><a href="{{ url('features/plug_ins') }}">Legacy: ColVis</a></h3>
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
			        <div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">Buttons</a></h3>
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
		        		<div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">Editor</a></h3>
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
		        		<div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">FixedHeader</a></h3>
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
		        		<div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">Responsive</a></h3>
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
		        		<div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">RowReorder</a></h3>
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
		        		<div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">SearchBuilder</a></h3>
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
		        		<div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">StateRestore</a></h3>
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
		        		<div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">Standalone: DateTime</a></h3>
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
		        		<div class="toc-group">
		                <h3><a href="{{ url('features/plug_ins') }}">Legacy: TableTools</a></h3>
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