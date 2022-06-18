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
		                        <a href="{{ url('extensions/autofill/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/styling/foundation') }}">Foundation</a>
		                    </li>							
							<li>
		                        <a href="{{ url('extensions/autofill/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/autofill/styling/bulma') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/autofill/styling/jqueryui') }}">jQuery UI</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- buttons --}}
		                <h3><a href="{{ url('extensions/buttons') }}"><i class="fa fa-arrow-circle-right"></i> Buttons</a></h3>
		                {{-- buttons / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/buttons/initialisation') }}">Basic initialisation</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/simple') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/') }}">File export</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/export') }}">Custom button</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons//initialisation/className') }}">Class names</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/keys') }}">Keyboard activation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/collections') }}">Collections</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons//initialisation/collections_sub') }}">Multi-level collections</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/collections_autoClose') }}">Auto close collection</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/plugins') }}">Plug-ins</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('eextensions/buttons//initialisation/new') }}">`new` initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/multiple') }}">Multiple button groups</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/pageLength') }}">Page length (button)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons//initialisation/pageLength_select') }}">Page length (select)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/customHTMLButtons') }}">Custom HTML in Buttons Collection</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons//initialisation/select') }}">Select integration - export selected rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons//initialisation/spacer') }}">Space between buttons</a>
		                    </li>
		                    {{-- buttons / html5 --}}
		                    <h3 class="tx"><a href="{{ url('extensions/buttons/html5') }}">HTML 5 data export</a></h3>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/titleMessage') }}">Export titles and messages</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/simple') }}">HTML5 export buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/footer') }}">Include footer in export</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/html5/tsv') }}">Tab separated values</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/filename') }}">File name</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/copyi18n') }}">Copy button internationalisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/html5/columns') }}">Column selectors</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/outputFormat_orthogonal') }}">Format output data - orthogonal data</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/outputFormat_function') }}">Format output data - export options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/html5/excelAutoFilter') }}">Excel - auto filter</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/excelTextBold') }}">Excel - Bold text</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/excelCellShading') }}">Excel - Cell background</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/html5/excelBorder') }}">Excel - Customise borders</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/pdfMessage') }}">PDF - message</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/pdfPage') }}">PDF - page size and orientation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/html5/pdfImage') }}">PDF - image</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/pdfOpen') }}">PDF - open in new window</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/html5/customFile') }}">Custom file (JSON)</a>
		                    </li>
		                    {{-- buttons / column_visibility --}}
		                    <h3 class="tx"><a href="{{ url('extensions/buttons/column_visibility') }}">Column visibility</a></h3>
							<li>
		                        <a href="{{ url('extensions/buttons/column_visibility/simple') }}">Basic column visibility</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/column_visibility/layout') }}">Multi-column layout</a>
		                    </li>
							<li>
		                        <a href="{{ url('eextensions/buttons/column_visibility/columnText') }}">Customisation of column button text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/column_visibility/text') }}">Internationalisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/column_visibility/restore') }}">Restore column visibility</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/column_visibility/columns') }}">Select columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/column_visibility/columnsToggle') }}">Visibility toggle buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/column_visibility/columnGroups') }}">Column groups</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/column_visibility/stateSave') }}">State saving</a>
		                    </li>
		                    {{-- buttons / print --}}
		                    <h3 class="tx"><a href="{{ url('extensions/buttons/print') }}">Print</a></h3>
							<li>
		                        <a href="{{ url('extensions/buttons/print/simple') }}">Print button</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/print/message') }}">Custom message</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/print/columns') }}">Export options - column selector</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/print/select') }}">Export options - row selector</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/print/autoPrint') }}">Disable auto print</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/print/customisation') }}">Customisation of the print view window</a>
		                    </li>
		                    {{-- buttons / api --}}
		                    <h3 class="tx"><a href="{{ url('extensions/buttons/api') }}">API</a></h3>
							<li>
		                        <a href="{{ url('extensions/buttons/api/enable') }}">Enable / disable</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/api/text') }}">Dynamic text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/api/addRemove') }}">Adding and removing buttons dynamically</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/api/group') }}">Group selection</a>
		                    </li>
		                    {{-- buttons / split --}}
		                    <h3 class="tx"><a href="{{ url('extensions/buttons/split') }}">Split buttons</a></h3>
							<li>
		                        <a href="{{ url('extensions/buttons/split/dataTables') }}">Split Dropdown Button</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/split/bootstrap') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/split/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/split/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/split/foundation') }}">Foundation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/split/bulma') }}">Bulma</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/buttons/split/jqueryui') }}">jQuery UI</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/split/semanticui') }}">Semantic UI</a>
		                    </li>
		                    {{-- buttons / styling --}}
		                    <h3 class="tx"><a href="{{ url('extensions/buttons/styling') }}">Styling</a></h3>
		                    <li>
		                        <a href="{{ url('extensions/buttons/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/buttons/styling/foundation') }}">Foundation</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/buttons/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/styling/bulma') }}">Bulma</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/buttons/styling/jqueryui') }}">jQuery UI</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/buttons/styling/icons') }}">Icons</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/buttons/styling/dropup') }}">Dropup collection</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- colreorder --}}
		                <h3><a href="{{ url('extensions/colreorder') }}"><i class="fa fa-arrow-circle-right"></i> ColReorder</a></h3>
		                {{-- colreorder / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/colreorder/initialisation') }}">Initialisation and options</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/colreorder/initialisation/simple') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/colreorder/initialisation/scrolling') }}">Scrolling table</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/initialisation/predefined') }}">Predefined column ordering</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/colreorder/initialisation/realtime') }}">Realtime updating</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/initialisation/col_filter') }}">Individual column filtering</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/colreorder/initialisation/new_init') }}">Initialisation using `new`</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/initialisation/enableDisable') }}">Enable / disable API</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/colreorder/initialisation/reset') }}">Reset ordering API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/initialisation/footer_callback') }}">Footer callback</a>
		                    </li>
		                    {{-- colreorder / integration --}}							
		                    <h3 class="tx"><a href="{{ url('extensions/colreorder/integration') }}">Integration with other DataTables extensions</a></h3>
							<li>
		                        <a href="{{ url('extensions/colreorder/integration/colvis') }}">Column visibility integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/colreorder/integration/fixedcolumns') }}">FixedColumns integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/integration/fixedheader') }}">FixedHeader integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/colreorder/integration/responsive') }}">Responsive integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/integration/server_side') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/colreorder/integration/state_save') }}">State saving</a>
		                    </li>
		                    {{-- colreorder / styling --}}		
		                    <h3 class="tx"><a href="{{ url('extensions/colreorder/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/colreorder/styling/alt_insert') }}">Alternative insert</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/styling/foundation') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/colreorder/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/styling/bulma') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/colreorder/styling/jqueryui') }}">jQuery UI</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- editor --}}
		                <h3><a href="{{ url('extensions/editor') }}"><i class="fa fa-arrow-circle-right"></i> Editor</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/editor/introduction') }}">Introduction</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- fixedcolumns --}}
		                <h3><a href="{{ url('extensions/fixedcolumns') }}"><i class="fa fa-arrow-circle-right"></i> FixedColumns</a></h3>
		                {{-- fixedcolumns / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/fixedcolumns/initialisation') }}">Initialisation and options</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/simple') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/button') }}">Buttons initialisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/two_columns') }}">Multiple fixed columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/api') }}">DataTables API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/right_column') }}">Right column only</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/left_right_columns') }}">Left and right fixed columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/scrollX') }}">Only Horizontal Scrolling</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/colvis') }}">Column visibility integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/server_side_processing') }}">Server-side processing</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/css_size') }}">CSS row sizing</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/size_fixed') }}">Assigned column width</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/size_fluid') }}">Fluid column width</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/initialisation/index_column') }}">Index column</a>
		                    </li>	
		                    {{-- fixedcolumns / integration --}}					
		                    <h3 class="tx"><a href="{{ url('extensions/fixedcolumns/integration') }}">Integration with other DataTables extensions</a></h3>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/integration/rowReorder') }}">RowReorder</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/integration/autofill') }}">AutoFill</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/integration/select_checkbox') }}">Select - checkboxes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/integration/select') }}">Select - whole row</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/integration/api') }}">DataTables API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/integration/fixedHeader') }}">FixedHeader</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/integration/fixedHeaderFooter') }}">FixedHeader with Footer</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/integration/keytable') }}">KeyTable</a>
		                    </li>
		                    {{-- fixedcolumns / styling --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/fixedcolumns/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/rowspan') }}">Complex headers</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/col_filter') }}">Individual column filtering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/rtl') }}">Right-to-left text direction</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/foundation') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/bulma') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns/styling/jqueryui') }}">jQuery UI styling</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- fixedheader --}}
		                <h3><a href="{{ url('extensions/fixedheader') }}"><i class="fa fa-arrow-circle-right"></i> FixedHeader</a></h3>
		                {{-- fixedheader / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/fixedheader/initialisation') }}">Initialisation and options</a></h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/simple') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/header_footer') }}">Header and footer fixed</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/two_tables') }}">Multiple tables</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/offset_automatic.') }}">Offset - automatic</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/offset') }}">Offset - manual</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/scrolling') }}">Scrolling Table</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/horizontal_scroll') }}">Horizontal page scrolling</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/enable_disable') }}">Enable / disable FixedHeader</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/show_hide') }}">Show / hide FixedHeader</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/columnFiltering') }}">Column filtering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/initialisation/new') }}">Alternative initialisation</a>
		                    </li>	
		                    {{-- fixedheader / integration --}}											
		                    <h3 class="tx"><a href="{{ url('extensions/fixedheader/integration') }}">Integration with other DataTables extensions</a></h3>
							<li>
		                        <a href="{{ url('extensions/fixedheader/integration/responsive') }}">Responsive integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader/integration/bootstrap') }}">Responsive integration (Bootstrap)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/integration/rowgroup') }}">RowGroup</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader/integration/scroller') }}">Scroller</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/integration/colreorder') }}">ColReorder integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader/integration/buttons') }}">Buttons columns visibility integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/integration/fixedcolumns') }}">FixedColumns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader/integration/columnFiltering') }}">Column filtering</a>
		                    </li>
		                    {{-- fixedheader / styling --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/fixedheader/styling') }}">Styling</a></h3>							
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/styling/foundation') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/styling/bulma') }}">Bulma</a>
		                    </li>		                                        		                    
		                    <li>
		                        <a href="{{ url('extensions/fixedheader/styling/jqueryui') }}">jQuery UI</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- keytable --}}
		                <h3><a href="{{ url('extensions/keytable') }}"><i class="fa fa-arrow-circle-right"></i> KeyTable</a></h3>
		                {{-- keytable / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/keytable/initialisation') }}">Initialisation</a></h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/keytable/initialisation/simple') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/keytable/initialisation/events') }}">Events</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/initialisation/scrolling') }}">Scrolling table</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/initialisation/scroller') }}">Scroller integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/initialisation/server-side') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/initialisation/stateSave') }}">State saving</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/initialisation/blurable') }}">Keep focus (no blur)</a>
		                    </li>blurable
		                    {{-- keytable / styling --}}
							<h3 class="tx"><a href="{{ url('extensions/keytable/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/keytable/styling/focusStyle') }}">Focus cell custom styling</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/keytable/styling/bootstrap') }}">Bootstrap</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/styling/foundation') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/keytable/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/styling/bulma') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable/styling/jqueryui') }}">jQuery UI</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- responsive --}}
		                <h3><a href="{{ url('extensions/responsive') }}"><i class="fa fa-arrow-circle-right"></i> Responsive</a></h3>
		                {{-- responsive / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/responsive/initialisation') }}">Initialisation</a></h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/responsive/initialisation/className') }}">Class name</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/responsive/initialisation/option') }}">Configuration option</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/initialisation/new') }}">`new` constructor</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/initialisation/ajax') }}">Ajax data</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/initialisation/default') }}">Default initialisation</a>
		                    </li>	
		                    {{-- responsive / display_types --}}						
							<h3 class="tx"><a href="{{ url('extensions/responsive/display_types') }}">Display-types</a></h3>
							<li>
		                        <a href="{{ url('extensions/responsive/immediateShow') }}">Immediately show hidden details</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/display_types/modal') }}">Modal details display</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/display_types/bootstrap_modal') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive/display_types/bootstrap4_modal') }}">Bootstrap 4</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/display_types/bootstrap5_modal') }}">Bootstrap 5</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/responsive/display_types/foundation_modal') }}">Foundation</a>
		                    </li>			                    
		                    <li>
		                        <a href="{{ url('extensions/responsive/display_types/bulma_modal') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/display_types/jqueryui_modal') }}">jQuery UI</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive/display_types/semanticui_modal') }}">Semantic UI</a>
		                    </li>
		                    {{-- responsive / column_control --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/responsive/column_control') }}">Column-control</a></h3>
							<li>
		                        <a href="{{ url('extensions/responsive/column_control/auto') }}">Automatic column hiding</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/column_control/columnPriority') }}">Column priority</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/column_control/classes') }}">Class control</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/column_control/init_classes') }}">Assigned class control</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive/column_control/column_visibility') }}">With Buttons - Column visibility</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/column_control/fixedHeader') }}">With FixedHeader</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/column_control/colreorder') }}">With ColReorder</a>
		                    </li>
		                    {{-- responsive / child_rows --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/responsive/child_rows') }}">Child rows</a></h3>
							<li>
		                        <a href="{{ url('extensions/responsive/child_rows/disable_child_rows') }}">Disable child rows</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/child_rows/column_control') }}">Column controlled child rows</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/child_rows/right_column') }}">Column control - right</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/child_rows/whole_row_control') }}">Whole row child row control</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive/child_rows/custom_renderer') }}">Custom child row renderer</a>
		                    </li>	
		                    {{-- responsive / styling --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/responsive/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/responsive/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive/styling/foundation') }}">Foundation</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive/styling/bulma') }}">Bulma</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/responsive/styling/jqueryui') }}">jQuery UI</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive/styling/compact') }}">Compact</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive/styling/scrolling') }}">Vertical scrolling</a>
		                    </li>
		                </ul>
		            </div>
		            <div class="toc-group">
		            	{{-- rowgroup --}}
		                <h3><a href="{{ url('extensions/rowgroup') }}"><i class="fa fa-arrow-circle-right"></i> RowGroup</a></h3>
		                {{-- rowgroup / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/rowgroup/initialisation') }}">Initialisation</a></h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/simple') }}">Simple initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/endRender') }}">End grouping only</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/startAndEndRender') }}">Start and end grouping</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/customRow') }}">Custom row rendering / aggregates</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/ajaxObjects') }}">Ajax with objects</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/fixedOrdering') }}">Fixed ordering</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/event') }}">Data source change event</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/multipleGroups') }}">Multi-level grouping</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/range') }}">Group with a range of values</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/initialisation/responsive') }}">Integration with Responsive</a>
		                    </li>
		                    {{-- rowgroup / styling --}}
							<h3 class="tx"><a href="{{ url('extensions/rowgroup/styling') }}">Styling</a></h3>	                    
							<li>
		                        <a href="{{ url('extensions/rowgroup/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/styling/foundation') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowgroup/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup/styling/bulma') }}">Bulma</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/rowgroup/styling/jqueryui') }}">jQuery UI</a>
		                    </li> 
		                </ul>
		            </div>		         
			        <div class="toc-group">
			        	{{-- rowreorder --}}
		                <h3><a href="{{ url('extensions/rowreorder') }}"><i class="fa fa-arrow-circle-right"></i> RowReorder</a></h3>
		                {{-- rowreorder / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/rowreorder/initialisation') }}">Initialisation</a></h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/rowreorder/initialisation/simple') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/rowreorder/initialisation/ajax') }}">Ajax data source with objects</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder/initialisation/restrictedOrdering') }}">Restricted column ordering (sorting)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder/initialisation/responsive') }}">Mobile support (Responsive integration)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder/initialisation/selector') }}">Full row selection</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder/initialisation/events') }}">Reorder event</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder/initialisation/scroll') }}">DataTables Scrolling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowreorder/initialisation/defaults') }}">Defaults</a>
		                    </li>
		                    {{-- rowreorder / styling --}}
							<h3 class="tx"><a href="{{ url('extensions/rowreorder/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/rowreorder/styling/reorderClass') }}">Selector cell styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowreorder/styling/snapX') }}">Horizontal snap</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/rowreorder/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>			                    
		                    <li>
		                        <a href="{{ url('extensions/rowreorder/styling/foundation') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowreorder/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>		                    	                    	
		                    <li>
		                        <a href="{{ url('extensions/rowreorder/styling/bulma') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowreorder/styling/jqueryui') }}">jQuery UI</a>
		                    </li>
		                </ul>
		     		</div> 
		        		<div class="toc-group">
		        		{{-- scroller --}}	
		                <h3><a href="{{ url('extensions/scroller') }}"><i class="fa fa-arrow-circle-right"></i> Scroller</a></h3>
		                {{-- scroller / initialisation --}}	 	
		                <h3 class="tx"><a href="{{ url('extensions/scroller/initialisation') }}">Initialisation</a></h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/scroller/initialisation/simple') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/scroller/initialisation/state_saving') }}">State saving</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller/initialisation/large_js_source') }}">Client-side data source (50,000 rows)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller/initialisation/server_side_processing') }}">Server-side processing (5,000,000 rows)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller/initialisation/api_scrolling') }}">API</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller/initialisation/fixedColumns') }}">FixedColumns integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller/initialisation/select') }}">Select integration</a>
		                    </li>
		                    {{-- scroller / styling --}}	 
							<h3 class="tx"><a href="{{ url('extensions/scroller/styling') }}">Styling</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/scroller/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>							
							<li>
		                        <a href="{{ url('extensions/scroller/styling/foundation') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/scroller/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/scroller/styling/bulma') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller/styling/jqueryui') }}">jQuery UI</a>
		                    </li> 
		                </ul>
		       		 </div> 
		        		<div class="toc-group">
		        		{{-- searchbuilder --}}	
		                <h3><a href="{{ url('extensions/searchbuilder') }}"><i class="fa fa-arrow-circle-right"></i> SearchBuilder</a></h3>
		                {{-- searchbuilder / initialisation --}}	
		                <h3 class="tx"><a href="{{ url('extensions/searchbuilder/initialisation') }}">Initialisation and options</a></h3>
		                <ul class="toc active">
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/simple') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/api') }}">API Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/buttonOptions') }}">SearchBuilder Configuration using Buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/button') }}">Button Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/num_fmt') }}">Formatted Numbers</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/date_fmt') }}">Formatted Date using Moment</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/date_fmt_luxon') }}">Formatted Date using Luxon</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/logic') }}">Default Logic</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/columns') }}">Restrict Filtering to Certain Columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/depthLimit') }}">Limit Sub-Group Depth</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/preDefined') }}">PreDefined Search</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/emptyCells') }}">Interaction with Empty Cells</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/returnSearch') }}">Force Search on Enter</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/html') }}">HTML Format</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/renderedCells') }}">Interaction with Rendered Cells</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/initialisation/unknownType') }}">Unknown Column Type</a>
		                    </li>
		                    {{-- searchbuilder / performance --}}
							<h3 class="tx"><a href="{{ url('extensions/searchbuilder/performance') }}">Performance</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder/performance/searchBuilder5k') }}">5k Rows</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/performance/searchBuilder50k') }}">50k Rows</a>
		                    </li> 
		                    {{-- searchbuilder / api --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchbuilder/api') }}">API demonstrations</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder/api/rebuild') }}">Rebuild Demonstration</a>
		                    </li>
		                    {{-- searchbuilder / customisation --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/searchbuilder/customisation') }}">Customisation</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder/customisation/customTitle') }}">Custom Title</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder/customisation/defaultCondition') }}">Default Condition</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/customisation/buttonText') }}">SearchBuilder Button Text</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/customisation/language') }}">Language Options</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder/customisation/renderArrays') }}">Rendering Arrays</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/customisation/customConditions') }}">Custom Conditions</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder/customisation/customMultiple') }}">Custom Multiple Of Condition</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/customisation/orthogonal') }}">Using Orthogonal Data</a>
		                    </li> 		                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder/customisation/plugin') }}">Plug-in Example</a>
		                    </li> 
		                    {{-- searchbuilder / styling --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/searchbuilder/styling') }}">Styling</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder/styling/greyscale') }}">GreyScale</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder/styling/foundation') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li> 
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder/styling/bulma') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/styling/jqueryui') }}">jQuery UI</a>
		                    </li>  
		                    {{-- searchbuilder / integration --}}	                 
							<h3 class="tx"><a href="{{ url('extensions/searchbuilder/integration') }}">Integration</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder/integration/statesave') }}">StateSave Integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/integration/buttons') }}">Buttons Integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/integration/colReorder') }}">ColReorder Integration</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder/integration/searchPanes') }}">SearchPanes Integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder/integration/searchPanesCascadeViewTotal') }}">SearchPanes, CascadePanes and ViewTotal Integration</a>
		                    </li>
		                </ul>
		       		 </div> 
		        		<div class="toc-group">
		        		{{-- searchpanes --}}
		                <h3><a href="{{ url('extensions/searchpanes') }}"><i class="fa fa-arrow-circle-right"></i> SearchPanes</a></h3>
		                {{-- searchpanes / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/searchpanes/initialisation') }}">Initialisation and options</a></h3>	
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Basic Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">API Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Button Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">SearchPanes Button Configuration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Collapsed Panes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Change SearchPanes Layout.</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Force Panes to Show/Hide for Specified Columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Uniqueness Threshold</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Cascade Panes</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">View Totals and Subtotals</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Viewing Totals, Subtotals and Cascading Panes</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Pre-Select Rows with Cascade</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Pre-Select Rows</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Ajax Loaded SearchPanes Options</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Disable Clear Buttons for Panes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/initialisation/') }}">Speed Optimisation</a>
		                    </li>
		                    {{-- searchpanes / advanced --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/advanced') }}">Advanced initialisation</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">StateSave</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">able with empty cells</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Empty Table</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Abstract Types</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Column Filter Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Long Data in Panes</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Integration with DataTables Rendering Function</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Using Render Function to Create Custom Options</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Rendering Arrays</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">HTML Entities from the DOM</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">HTML Entities from Ajax</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Unencoded HTML characters with a Rendering Function from Ajax</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">HTML Entities from an Ajax Request with a Rendering Function</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Dealing with unusual characters</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Selection style to work with mobile devices</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/advanced/') }}">Deleting rows Mid-search</a>
		                    </li>
		                    {{-- searchpanes / customisation --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/customisation') }}">Customisation</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Panes Vertically Stacked next to DataTable</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Panes in footer of DataTable</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Pane customisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Button text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Custom Pane Title</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Custom Pane Class</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Internationalisation Language Options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Custom Pane Order</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Hide Count Column</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Hide Count Column on Specific Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Hide Ordering Buttons</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Hide Ordering Buttons on Specific Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Hide Collapsing Button</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Hide Collapsing Button on Specific Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Hide All Controls</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation/') }}">Hide All Controls on Specific Pane</a>
		                    </li>
		                    {{-- searchpanes / integration --}}
		                     <h3 class="tx"><a href="{{ url('extensions/searchpanes/integration') }}">Integration with other DataTables extensions</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/searchpanes/integration/') }}">Buttons Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/integration/') }}">ColReorder Integration</a>
		                    </li>
		                    {{-- searchpanes / customisation --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/customisation') }}">Creation of custom panes</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/searchpanes/customisation') }}">Custom Filtering Options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation') }}">Custom Filtering Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation') }}">Custom Filtering Pane with PreSelections</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/customisation') }}">Only Custom Panes</a>
		                    </li>
		                    {{-- searchpanes / styling --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/styling') }}">Styling</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/searchpanes/styling/') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/styling/') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/styling/') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/styling/') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/styling/') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/styling/') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/styling/') }}">jQuery UI</a>
		                    </li>
		                    {{-- searchpanes / performance --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/performance') }}">Performance</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/searchpanes/performance/') }}">5k Rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/performance/') }}">50k Rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/performance/') }}">50k Rows with cascadePanes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes/performance/') }}">50k Rows with cascadePanes and viewTotal</a>
		                    </li>
		                </ul>
		     		</div> 
		        		<div class="toc-group">
		        		{{-- staterestore --}}
		                <h3><a href="{{ url('extensions/staterestore') }}"><i class="fa fa-arrow-circle-right"></i> StateRestore</a></h3>
		                {{-- staterestore / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/staterestore/initialisation') }}">Initialisation and options</a></h3>	
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Alternative UI</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Basic StateRestore Example</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Basic StateRestore Example - API</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Custom Split Buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Remove All Button</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Ajax Loading and Saving</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Ajax Function</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Predefined States</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Predefined States from Ajax</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Predefined States - No Save, Remove, Rename or Create</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">No state creation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">No state remove</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">No state renaming</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">No state saving</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">No Buttons</a>
		                    </li>
		                    {{-- staterestore / customisation --}}
		                    <h3 class="tx"><a href="{{ url('extensions/staterestore/customisation') }}">Customisation</a></h3>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Label to Display Active States</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Creation Modal</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Custom State Data</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Creation Modal with Toggle for Columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Creation Modal with Toggle</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">StateRestore Language Options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Custom Button Text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Don't save column searches</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Child Rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Don't save column visibility</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Don't save ordering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Don't save paging</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Don't save scroller</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Don't save search</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Don't save SearchBuilder</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Don't save SearchPanes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Don't save Selections</a>
		                    </li>	
		                    {{-- staterestore / integration --}}
		                    <h3 class="tx"><a href="{{ url('extensions/staterestore/integration') }}">Integration with other DataTables extensions</a></h3>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Predefined SearchPanes State</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Scroller Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">SearchBuilder Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">SearchPanes Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Select Integration</a>
		                    </li>
		                    {{-- staterestore / styling --}}
		                    <h3 class="tx"><a href="{{ url('extensions/staterestore/styling') }}">Styling</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/staterestore') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/staterestore') }}">jQuery UI</a>
		                    </li>
		                </ul>
		        	</div> 
		        		<div class="toc-group">
		        		{{-- select --}}
		                <h3><a href="{{ url('extensions/select') }}"><i class="fa fa-arrow-circle-right"></i> Select</a></h3>
		                {{-- select / initialisation --}}
		                <h3 class="tx"><a href="{{ url('extensions/select/initialisation') }}">Initialisation</a></h3>	
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/select') }}">Simple initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/select') }}">Disable Element Deselection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Single item selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Multi item selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Cell selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Checkbox selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">State Save</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Internationalisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Blur selection</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Defer rendering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Buttons</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Retain selection on reload</a>
		                    </li>
		                    {{-- select / styling --}}
		                    <h3 class="tx"><a href="{{ url('extensions/select/styling') }}">Styling</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/select') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">jQuery UI styling</a>
		                    </li>
		                    {{-- select / api --}}
		                    <h3 class="tx"><a href="{{ url('extensions/select/api') }}">API</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/select') }}">Get selected items</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Select items</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Events</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/select') }}">Events (cancellable)</a>
		                    </li>		          
		                </ul>
		        	</div> 
		        		<div class="toc-group">
		        		{{-- datetime --}}	
		                <h3><a href="{{ url('extensions/datetime') }}"><i class="fa fa-arrow-circle-right"></i> Standalone: DateTime</a></h3>
		                {{-- datetime / initialisation --}}	
		                <h3 class="tx"><a href="{{ url('extensions/datetime/initialisation') }}">Initialisation and options</a></h3>	
		                <ul class="toc">
							<li>
		                        <a href="{{ url('extensions/datetime') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/datetime') }}">jQuery initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/datetime') }}">Internationalisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/datetime') }}">Hidden input</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/datetime') }}">Action buttons (today and clear)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/datetime') }}">Date and time</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/datetime') }}">Moment formatting</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/datetime') }}">Luxon formatting</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/datetime') }}">DayJS formatting</a>
		                    </li>
		                    {{-- datetime / integration --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/datetime/integration') }}">Integration</a></h3>	
		                    <li>
		                    	<a href="{{ url('extensions/datetime') }}">Use in a form</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/datetime') }}">DataTables date range filter</a>
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