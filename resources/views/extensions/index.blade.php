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
	<title>DataTables extensions - extensions index</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables extensions <span>extensions index</span></h1>
			<div class="info">
				<p>The extensions that DataTables provides can be greatly enhanced by the use of the plug-ins available on this page, which give many new user interaction and configuration options.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						{{-- autofill --}}
						<h3><a href="{{ url('extensions/autofill') }}"><i class="fa fa-arrow-circle-right"></i> AutoFill</a></h3>
						{{-- autofill / initialisation --}}
						<h3 class="tx"><a href="{{ url('extensions/autofill/initialisation') }}">Initialisation</a></h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/autofill/initialisation/simple') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/fills') }}">Fill types</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/keyTable') }}">KeyTable integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/events') }}">Events</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/alwaysAsk') }}">Always confirm action</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/columns') }}">Column selector</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/focus') }}">Click focus</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/scrolling') }}">Scrolling DataTable</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/plugins') }}">Fill plug-ins</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/enableDisable') }}">Enable / disable API</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/initialisation/disableHorizontal') }}">Disable horizontal fill</a>
		                    </li>
		                    {{-- autofill / styling --}}
		                    <h3 class="tx"><a href="{{ url('extensions/autofill/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/autofill/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/styling/bootstrap4.blade.php') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/styling/bootstrap5.blade.php') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/styling/foundation.blade.php') }}">Foundation</a>
		                    </li>							
							<li>
		                        <a href="{{ url('extensions/autofill/styling/semanticui.blade.php') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/autofill/styling/bulma.blade.php') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/styling/jqueryui.blade.php') }}">jQuery UI</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- buttons --}}
		                <h3><a href="{{ url('extensions/buttons') }}"><i class="fa fa-arrow-circle-right"></i> Buttons</a></h3>
		                {{-- buttons / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/buttons') }}">Basic initialisation</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">File export</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Custom button</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons') }}">Class names</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Keyboard activation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Collections</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons') }}">Multi-level collections</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Auto close collection</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Plug-ins</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('eextensions/buttons') }}">`new` initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Multiple button groups</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Page length (button)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons') }}">Page length (select)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Custom HTML in Buttons Collection</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Select integration - export selected rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons') }}">Space between buttons</a>
		                    </li>
		                    {{-- buttons / html5 --}}
		                    <h3 class="tx">HTML 5 data export</h3>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Export titles and messages</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">HTML5 export buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Include footer in export</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons') }}">Tab separated values</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">File name</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Copy button internationalisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons') }}">Column selectors</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Format output data - orthogonal data</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Format output data - export options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons') }}">Excel - auto filter</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Excel - Bold text</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Excel - Cell background</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons') }}">Excel - Customise borders</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">PDF - message</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">PDF - page size and orientation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons') }}">PDF - image</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">PDF - open in new window</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons') }}">Custom file (JSON)</a>
		                    </li>
		                    {{-- buttons / column_visibility --}}
		                    <h3 class="tx">Column visibility</h3>
							<li>
		                        <a href="{{ url('extensions/advanced_init/complex_header') }}">Basic column visibility</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/object_dom_read') }}">Multi-column layout</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/html5_data_attributes') }}">Customisation of column button text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/complex_header') }}">Internationalisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/object_dom_read') }}">Restore column visibility</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/html5_data_attributes') }}">Select columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/complex_header') }}">Visibility toggle buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/object_dom_read') }}">Column groups</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/html5_data_attributes') }}">State saving</a>
		                    </li>
		                    {{-- buttons / print --}}
		                    <h3 class="tx">Print</h3>
							<li>
		                        <a href="{{ url('extensions/advanced_init/html5_data_options') }}">Print button</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/language_file') }}">Custom message</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/defaults') }}">Export options - column selector</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/html5_data_options') }}">Export options - row selector</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/language_file') }}">Disable auto print</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/defaults') }}">Customisation of the print view window</a>
		                    </li>
		                    {{-- buttons / api --}}
		                    <h3 class="tx">API</h3>
							<li>
		                        <a href="{{ url('extensions/advanced_init/row_callback') }}">Enable / disable</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Dynamic text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_callback') }}">Adding and removing buttons dynamically</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Group selection</a>
		                    </li>
		                    {{-- buttons / split --}}
		                    <h3 class="tx">Split buttons</h3>
							<li>
		                        <a href="{{ url('extensions/advanced_init/footer_callback') }}">Split Dropdown Button</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_callback') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_callback') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Foundation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Bulma</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_callback') }}">jQuery UI</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Semantic UI</a>
		                    </li>
		                    {{-- buttons / styling --}}
		                    <h3 class="tx">Styling</h3>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_callback') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_callback') }}">Bootstrap 5</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Foundation</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_grouping') }}">Bulma</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/row_callback') }}">jQuery UI</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/advanced_init/dom_toolbar') }}">Icons</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/advanced_init/dom_toolbar') }}">Dropup collection</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- colreorder --}}
		                <h3><a href="{{ url('extensions/non_jquery') }}"><i class="fa fa-arrow-circle-right"></i> ColReorder</a></h3>
		                {{-- colreorder / initialisation --}}
		                <h3 class="tx">Initialisation and options</h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/non_jquery/init') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Scrolling table</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Predefined column ordering</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Realtime updating</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Individual column filtering</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Initialisation using `new`</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Enable / disable API</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Reset ordering API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Footer callback</a>
		                    </li>
		                    {{-- colreorder / integration --}}							
		                    <h3 class="tx">Integration with other DataTables extensions</h3>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Column visibility integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">FixedColumns integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">FixedHeader integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Responsive integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">State saving</a>
		                    </li>
		                    {{-- colreorder / styling --}}		
		                    <h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Alternative insert</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">jQuery UI</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- editor --}}
		                <h3><a href="{{ url('extensions/styling') }}"><i class="fa fa-arrow-circle-right"></i> Editor</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Introduction</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- fixedcolumns --}}
		                <h3><a href="{{ url('extensions/data_sources') }}"><i class="fa fa-arrow-circle-right"></i> FixedColumns</a></h3>
		                {{-- fixedcolumns / initialisation --}}
		                <h3 class="tx">Initialisation and options</h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/non_jquery/init') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Buttons initialisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Multiple fixed columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">DataTables API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Right column only</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Left and right fixed columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Only Horizontal Scrolling</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Column visibility integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Server-side processing</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">CSS row sizing</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Assigned column width</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Fluid column width</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Index column</a>
		                    </li>	
		                    {{-- fixedcolumns / integration --}}					
		                    <h3 class="tx">Integration with other DataTables extensions</h3>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">RowReorder</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">AutoFill</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">FixedHeader integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Select - checkboxes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Select - whole row</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">DataTables API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">FixedHeader/a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">FixedHeader with Footer</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">KeyTable</a>
		                    </li>
		                    {{-- fixedcolumns / styling --}}	
		                    <h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Complex headers</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Individual column filtering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Right-to-left text direction</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">jQuery UI styling</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- fixedheader --}}
		                <h3><a href="{{ url('extensions/api') }}"><i class="fa fa-arrow-circle-right"></i> FixedHeader</a></h3>
		                {{-- fixedheader / initialisation --}}
		                <h3 class="tx">Initialisation and options</h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/non_jquery/init') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Header and footer fixed</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Multiple tables</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Offset - automatic</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Offset - manual</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Scrolling Table</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Horizontal page scrolling</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Enable / disable FixedHeader</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Show / hide FixedHeader</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Column filtering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/options') }}">Alternative initialisation</a>
		                    </li>	
		                    {{-- fixedheader / integration --}}											
		                    <h3 class="tx">Integration with other DataTables extensions</h3>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Responsive integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Responsive integration (Bootstrap)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">RowGroup</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Scroller</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">ColReorder integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Buttons columns visibility integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">FixedColumns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/non_jquery/dt_events') }}">Column filtering</a>
		                    </li>
		                    {{-- fixedheader / styling --}}	
		                    <h3 class="tx">Styling</h3>							
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">Bulma</a>
		                    </li>		                                        		                    
		                    <li>
		                        <a href="{{ url('extensions/non_jquery/ajax') }}">jQuery UI</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- keytable --}}
		                <h3><a href="{{ url('extensions/ajax') }}"><i class="fa fa-arrow-circle-right"></i> KeyTable</a></h3>
		                {{-- keytable / initialisation --}}
		                <h3 class="tx">Initialisation</h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/basic_init/zero_configuration') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Events</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/table_sorting') }}">Scrolling table</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multi_col_sort') }}">Scroller integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multiple_tables') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">State saving</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/complex_header') }}">Keep focus (no blur)</a>
		                    </li>
		                    {{-- keytable / styling --}}
							<h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Focus cell custom styling</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y_dynamic') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_xy') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/language') }}">jQuery UI</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- responsive --}}
		                <h3><a href="{{ url('extensions/server_side') }}"><i class="fa fa-arrow-circle-right"></i> Responsive</a></h3>
		                <h3 class="tx">Initialisation</h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/basic_init/zero_configuration') }}">Class name</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Configuration option</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/table_sorting') }}">`new` constructor</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multi_col_sort') }}">Ajax data</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multiple_tables') }}">Default initialisation</a>
		                    </li>							
							<h3 class="tx">Display-types</h3>
							<li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Immediately show hidden details</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Modal details display</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Bootstrap 4</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Bootstrap 5</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Foundation</a>
		                    </li>			                    
		                    <li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">jQuery UI</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Semantic UI</a>
		                    </li>
		                    <h3 class="tx">Column-control</h3>
							<li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Automatic column hiding</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Column priority</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Class control</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Assigned class control</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">With Buttons - Column visibility</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">With FixedHeader</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">With ColReorder</a>
		                    </li>
		                    <h3 class="tx">Child rows</h3>
							<li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Disable child rows</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Column controlled child rows</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Column control - right</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Whole row child row control</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Custom child row renderer</a>
		                    </li>	
		                    <h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Bootstrap 3</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Foundation</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Bulma</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">jQuery UI</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Compact</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Vertical scrolling</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- rowgroup --}}
		                <h3><a href="{{ url('extensions/plug_ins') }}"><i class="fa fa-arrow-circle-right"></i> RowGroup</a></h3>
		                <h3 class="tx">Initialisation</h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/basic_init/zero_configuration') }}">Simple initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">End grouping only</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/table_sorting') }}">Start and end grouping</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multi_col_sort') }}">Custom row rendering / aggregates</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multiple_tables') }}">Ajax with objects</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Fixed ordering</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/complex_header') }}">Data source change event</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/multiple_tables') }}">Multi-level grouping</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Group with a range of values</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/complex_header') }}">Integration with Responsive</a>
		                    </li>
							<h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Focus cell custom styling</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y_dynamic') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_xy') }}">Bulma</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/language') }}">jQuery UI</a>
		                    </li> 
		                </ul>
		            </div>		         
			        <div class="toc-group">
			        	{{-- rowreorder --}}
		                <h3><a href="{{ url('extensions/plug_ins') }}"><i class="fa fa-arrow-circle-right"></i> RowReorder</a></h3>
		                <h3 class="tx">Initialisation</h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/basic_init/zero_configuration') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Ajax data source with objects</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/table_sorting') }}">Restricted column ordering (sorting)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multi_col_sort') }}">Mobile support (Responsive integration)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multiple_tables') }}">Full row selection</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Reorder event</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/complex_header') }}">DataTables Scrolling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/multiple_tables') }}">Defaults</a>
		                    </li>
							<h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Selector cell styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Horizontal snap</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Bootstrap 3</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Bootstrap 5</a>
		                    </li>			                    
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>		                    	                    	
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/alt_pagination') }}">jQuery UI</a>
		                    </li>
		                </ul>
		     		</div> 
		        		<div class="toc-group">
		        		{{-- scroller --}}	
		                <h3><a href="{{ url('extensions/plug_ins') }}"><i class="fa fa-arrow-circle-right"></i> Scroller</a></h3>
		                <h3 class="tx">Initialisation</h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/basic_init/zero_configuration') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">State saving</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/table_sorting') }}">Client-side data source (50,000 rows)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multi_col_sort') }}">Server-side processing (5,000,000 rows)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multiple_tables') }}">API</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">FixedColumns integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/complex_header') }}">Select integration</a>
		                    </li>
							<h3 class="tx">Styling</h3>									                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y_dynamic') }}">Bootstrap 5</a>
		                    </li>							
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/scroll_xy') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/language') }}">jQuery UI</a>
		                    </li> 
		                </ul>
		       		 </div> 
		        		<div class="toc-group">
		        		{{-- searchbuilder --}}	
		                <h3><a href="{{ url('extensions/plug_ins') }}"><i class="fa fa-arrow-circle-right"></i> SearchBuilder</a></h3>
		                <h3 class="tx">Initialisation and options</h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/basic_init/zero_configuration') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">API Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/table_sorting') }}">SearchBuilder Configuration using Buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multi_col_sort') }}">Button Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multiple_tables') }}">Formatted Numbers</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Formatted Date using Moment</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/complex_header') }}">Formatted Date using Luxon</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/zero_configuration') }}">Default Logic</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/basic_init/filter_only') }}">Restrict Filtering to Certain Columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/table_sorting') }}">Limit Sub-Group Depth</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multi_col_sort') }}">PreDefined Search</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/multiple_tables') }}">Interaction with Empty Cells</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Force Search on Enter</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/complex_header') }}">HTML Format</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/hidden_columns') }}">Interaction with Rendered Cells</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/complex_header') }}">Unknown Column Type</a>
		                    </li>
							<h3 class="tx">Performance</h3>									                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">5k Rows</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">50k Rows</a>
		                    </li> 
		                    <h3 class="tx">API demonstrations</h3>									                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Rebuild Demonstration</a>
		                    </li>
		                    <h3 class="tx">Customisation</h3>									                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Custom Title</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">SearchBuilder Button Text</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y_dynamic') }}">Language Options</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_xy') }}">Rendering Arrays</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">Custom Conditions</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Custom Multiple Of Condition</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/language') }}">Using Orthogonal Data</a>
		                    </li> 		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/language') }}">Plug-in Example</a>
		                    </li> 
		                    <h3 class="tx">Styling</h3>									                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">GreyScale</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y_dynamic') }}">Bootstrap 4</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_xy') }}">Bootstrap 5</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/language') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li> 
		                    <li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/language') }}">jQuery UI</a>
		                    </li>                   
							<h3 class="tx">Integration</h3>									                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">StateSave Integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">Buttons Integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y_dynamic') }}">ColReorder Integration</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_xy') }}">SearchPanes Integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">SearchPanes, CascadePanes and ViewTotal Integration</a>
		                    </li>
		                </ul>
		       		 </div> 
		        		<div class="toc-group">
		        		{{-- searchpanes --}}
		                <h3><a href="{{ url('extensions/plug_ins') }}"><i class="fa fa-arrow-circle-right"></i> SearchPanes</a></h3>
		                <h3 class="tx">Initialisation and options</h3>	
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Basic Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_auto') }}">API Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_manual') }}">Button Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">SearchPanes Button Configuration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/dom_sort') }}">Collapsed Panes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Change SearchPanes Layout.</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_auto') }}">Force Panes to Show/Hide for Specified Columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_manual') }}">Uniqueness Threshold</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">Cascade Panes</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/dom_sort') }}">View Totals and Subtotals</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Viewing Totals, Subtotals and Cascading Panes</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_auto') }}">Pre-Select Rows with Cascade</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_manual') }}">Pre-Select Rows</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">Ajax Loaded SearchPanes Options</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/dom_sort') }}">Disable Clear Buttons for Panes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/dom_sort') }}">Speed Optimisation</a>
		                    </li>
		                    <h3 class="tx">Advanced initialisation</h3>									                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">StateSave</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">able with empty cells</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y_dynamic') }}">Empty Table</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_xy') }}">Abstract Types</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">Column Filter Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Long Data in Panes</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">Integration with DataTables Rendering Function</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y_dynamic') }}">Using Render Function to Create Custom Options</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_xy') }}">Rendering Arrays</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">HTML Entities from the DOM</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">HTML Entities from Ajax</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y') }}">Unencoded HTML characters with a Rendering Function from Ajax</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_y_dynamic') }}">HTML Entities from an Ajax Request with a Rendering Function</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_xy') }}">Dealing with unusual characters</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">Selection style to work with mobile devices</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/scroll_x') }}">Deleting rows Mid-search</a>
		                    </li>
		                    <h3 class="tx">Customisation</h3>									                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Panes Vertically Stacked next to DataTable</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Panes in footer of DataTable</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Pane customisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Button text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Custom Pane Title</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Custom Pane Class</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Internationalisation Language Options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Custom Pane Order</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Hide Count Column</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Hide Count Column on Specific Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Hide Ordering Buttons</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Hide Ordering Buttons on Specific Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Hide Collapsing Button</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Hide Collapsing Button on Specific Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Hide All Controls</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Hide All Controls on Specific Pane</a>
		                    </li>
		                     <h3 class="tx">Integration with other DataTables extensions</h3>								                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Buttons Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">ColReorder Integration</a>
		                    </li>
		                    <h3 class="tx">Creation of custom panes</h3>								                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Custom Filtering Options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Custom Filtering Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Custom Filtering Pane with PreSelections</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Only Custom Panes</a>
		                    </li>
		                    <h3 class="tx">Styling</h3>								                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">jQuery UI</a>
		                    </li>
		                    <h3 class="tx">Performance</h3>								                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">5k Rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">50k Rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">50k Rows with cascadePanes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">50k Rows with cascadePanes and viewTotal</a>
		                    </li>
		                </ul>
		     		</div> 
		        		<div class="toc-group">
		        		{{-- staterestore	 --}}
		                <h3><a href="{{ url('extensions/plug_ins') }}"><i class="fa fa-arrow-circle-right"></i> StateRestore</a></h3>
		                <h3 class="tx">Initialisation and options</h3>	
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Alternative UI</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_auto') }}">Basic StateRestore Example</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_manual') }}">Basic StateRestore Example - API</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">Custom Split Buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">Remove All Button</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/dom_sort') }}">Ajax Loading and Saving</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Ajax Function</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_auto') }}">Predefined States</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_manual') }}">Predefined States from Ajax</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">Predefined States - No Save, Remove, Rename or Create</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">No state creation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">No state remove</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_auto') }}">No state renaming</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_manual') }}">No state saving</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">No Buttons</a>
		                    </li>
		                    <h3 class="tx">Customisation</h3>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Label to Display Active States</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Creation Modal</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Custom State Data</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Creation Modal with Toggle for Columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Creation Modal with Toggle</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">StateRestore Language Options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Custom Button Text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Don't save column searches</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Child Rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Don't save column visibility</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Don't save ordering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Don't save paging</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Don't save scroller</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Don't save search</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Don't save SearchBuilder</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Don't save SearchPanes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Don't save Selections</a>
		                    </li>	
		                    <h3 class="tx">Integration with other DataTables extensions</h3>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Predefined SearchPanes State</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Scroller Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">SearchBuilder Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">SearchPanes Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Select Integration</a>
		                    </li>
		                    <h3 class="tx">Styling</h3>								                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">jQuery UI</a>
		                    </li>
		                </ul>
		        	</div> 
		        		<div class="toc-group">
		        		{{-- select	 --}}
		                <h3><a href="{{ url('extensions/plug_ins') }}"><i class="fa fa-arrow-circle-right"></i> Select</a></h3>
		                <h3 class="tx">Initialisation</h3>	
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Simple initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Disable Element Deselection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Single item selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Multi item selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Cell selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Checkbox selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">State Save</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Internationalisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Blur selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Defer rendering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Buttons</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Retain selection on reload</a>
		                    </li>
		                    <h3 class="tx">Styling</h3>								                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">jQuery UI styling</a>
		                    </li>
		                    <h3 class="tx">API</h3>								                    
							<li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Get selected items</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Select items</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Events</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/basic_init/comma_decimal') }}">Events (cancellable)</a>
		                    </li>		          
		                </ul>
		        	</div> 
		        		<div class="toc-group">
		        		{{-- datetime --}}	
		                <h3><a href="{{ url('extensions/plug_ins') }}"><i class="fa fa-arrow-circle-right"></i> Standalone: DateTime</a></h3>
		                <h3 class="tx">Initialisation and options</h3>	
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/api') }}">jQuery initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_auto') }}">Internationalisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/sorting_manual') }}">Hidden input</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">Action buttons (today and clear)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/dom_sort') }}">Date and time</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/plug_ins/sorting_manual') }}">Moment formatting</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">Luxon formatting</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/dom_sort') }}">DayJS formatting</a>
		                    </li>
		                    <h3 class="tx">Integration</h3>	<li>
		                    <a href="{{ url('extensions/plug_ins/range_filtering') }}">Use in a form</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/dom_sort') }}">DataTables date range filter</a>
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