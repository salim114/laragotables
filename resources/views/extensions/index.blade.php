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
		                        <a href="{{ url('extensions/fixedcolumns') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Buttons initialisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Multiple fixed columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">DataTables API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Right column only</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Left and right fixed columns</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Only Horizontal Scrolling</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Column visibility integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Server-side processing</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">CSS row sizing</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Assigned column width</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Fluid column width</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Index column</a>
		                    </li>	
		                    {{-- fixedcolumns / integration --}}					
		                    <h3 class="tx"><a href="{{ url('extensions/fixedcolumns/integration') }}">Integration with other DataTables extensions</a></h3>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">RowReorder</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">AutoFill</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">FixedHeader integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Select - checkboxes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Select - whole row</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">DataTables API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">FixedHeader/a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">FixedHeader with Footer</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">KeyTable</a>
		                    </li>
		                    {{-- fixedcolumns / styling --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/fixedcolumns/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Complex headers</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Individual column filtering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Right-to-left text direction</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedcolumns') }}">jQuery UI styling</a>
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
		                        <a href="{{ url('extensions/fixedheader') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader') }}">Header and footer fixed</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Multiple tables</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader') }}">Offset - automatic</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Offset - manual</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader') }}">Scrolling Table</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Horizontal page scrolling</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader') }}">Enable / disable FixedHeader</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Show / hide FixedHeader</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Column filtering</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Alternative initialisation</a>
		                    </li>	
		                    {{-- fixedheader / integration --}}											
		                    <h3 class="tx"><a href="{{ url('extensions/fixedheader/integration') }}">Integration with other DataTables extensions</a></h3>
							<li>
		                        <a href="{{ url('extensions/fixedheader') }}">Responsive integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader') }}">Responsive integration (Bootstrap)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">RowGroup</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader') }}">Scroller</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">ColReorder integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader') }}">Buttons columns visibility integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">FixedColumns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/fixedheader') }}">Column filtering</a>
		                    </li>
		                    {{-- fixedheader / styling --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/fixedheader/styling') }}">Styling</a></h3>							
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">Bulma</a>
		                    </li>		                                        		                    
		                    <li>
		                        <a href="{{ url('extensions/fixedheader') }}">jQuery UI</a>
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
		                        <a href="{{ url('extensions/keytable') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Events</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Scrolling table</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Scroller integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">State saving</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Keep focus (no blur)</a>
		                    </li>
		                    {{-- keytable / styling --}}
							<h3 class="tx"><a href="{{ url('extensions/keytable/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Focus cell custom styling</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Bootstrap</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/keytable') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/keytable') }}">jQuery UI</a>
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
		                        <a href="{{ url('extensions/responsive') }}">Class name</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Configuration option</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">`new` constructor</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Ajax data</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Default initialisation</a>
		                    </li>	
		                    {{-- responsive / display_types --}}						
							<h3 class="tx"><a href="{{ url('extensions/responsive/display_types') }}">Display-types</a></h3>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Immediately show hidden details</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Modal details display</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Bootstrap 4</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Bootstrap 5</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Foundation</a>
		                    </li>			                    
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">jQuery UI</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Semantic UI</a>
		                    </li>
		                    {{-- responsive / column_control --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/responsive/column_control') }}">Column-control</a></h3>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Automatic column hiding</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Column priority</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Class control</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Assigned class control</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">With Buttons - Column visibility</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">With FixedHeader</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">With ColReorder</a>
		                    </li>
		                    {{-- responsive / child_rows --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/responsive/child_rows') }}">Child rows</a></h3>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Disable child rows</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Column controlled child rows</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Column control - right</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Whole row child row control</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Custom child row renderer</a>
		                    </li>	
		                    {{-- responsive / styling --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/responsive/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Bootstrap 3</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Foundation</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Bulma</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">jQuery UI</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/responsive') }}">Compact</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/responsive') }}">Vertical scrolling</a>
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
		                        <a href="{{ url('extensions/rowgroup') }}">Simple initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">End grouping only</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Start and end grouping</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Custom row rendering / aggregates</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Ajax with objects</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Fixed ordering</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Data source change event</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowgroup') }}">Multi-level grouping</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Group with a range of values</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Integration with Responsive</a>
		                    </li>
		                    {{-- rowgroup / styling --}}
							<h3 class="tx"><a href="{{ url('extensions/rowgroup/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Focus cell custom styling</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowgroup') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">Bulma</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/rowgroup') }}">jQuery UI</a>
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
		                        <a href="{{ url('extensions/rowreorder') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/rowreorder') }}">Ajax data source with objects</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder') }}">Restricted column ordering (sorting)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder') }}">Mobile support (Responsive integration)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder') }}">Full row selection</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder') }}">Reorder event</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder') }}">DataTables Scrolling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowreorder') }}">Defaults</a>
		                    </li>
		                    {{-- rowreorder / styling --}}
							<h3 class="tx"><a href="{{ url('extensions/rowreorder/styling') }}">Styling</a></h3>
							<li>
		                        <a href="{{ url('extensions/rowreorder') }}">Selector cell styling</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowreorder') }}">Horizontal snap</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder') }}">Bootstrap 3</a>
		                    </li>	
		                    <li>
		                        <a href="{{ url('extensions/rowreorder') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/rowreorder') }}">Bootstrap 5</a>
		                    </li>			                    
		                    <li>
		                        <a href="{{ url('extensions/rowreorder') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowreorder') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>		                    	                    	
		                    <li>
		                        <a href="{{ url('extensions/rowreorder') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/rowreorder') }}">jQuery UI</a>
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
		                        <a href="{{ url('extensions/scroller') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/scroller') }}">State saving</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller') }}">Client-side data source (50,000 rows)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller') }}">Server-side processing (5,000,000 rows)</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller') }}">API</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller') }}">FixedColumns integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller') }}">Select integration</a>
		                    </li>
		                    {{-- scroller / styling --}}	 
							<h3 class="tx"><a href="{{ url('extensions/scroller/styling') }}">Styling</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/scroller') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller') }}">Bootstrap 5</a>
		                    </li>							
							<li>
		                        <a href="{{ url('extensions/scroller') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/scroller') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/scroller') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/scroller') }}">jQuery UI</a>
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
		                        <a href="{{ url('extensions/searchbuilder') }}">Basic initialisation</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">API Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">SearchBuilder Configuration using Buttons</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Button Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Formatted Numbers</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Formatted Date using Moment</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Formatted Date using Luxon</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Default Logic</a> 
		                    </li>          
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Restrict Filtering to Certain Columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Limit Sub-Group Depth</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">PreDefined Search</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Interaction with Empty Cells</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Force Search on Enter</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">HTML Format</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Interaction with Rendered Cells</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Unknown Column Type</a>
		                    </li>
		                    {{-- searchbuilder / performance --}}
							<h3 class="tx"><a href="{{ url('extensions/searchbuilder/performance') }}">Performance</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">5k Rows</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">50k Rows</a>
		                    </li> 
		                    {{-- searchbuilder / api --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchbuilder/api') }}">API demonstrations</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Rebuild Demonstration</a>
		                    </li>
		                    {{-- searchbuilder / customisation --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/searchbuilder/customisation') }}">Customisation</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Custom Title</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">SearchBuilder Button Text</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Language Options</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Rendering Arrays</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Custom Conditions</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Custom Multiple Of Condition</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Using Orthogonal Data</a>
		                    </li> 		                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Plug-in Example</a>
		                    </li> 
		                    {{-- searchbuilder / styling --}}	
		                    <h3 class="tx"><a href="{{ url('extensions/searchbuilder/styling') }}">Styling</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">GreyScale</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Bootstrap 4</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Bootstrap 5</a>
		                    </li>							
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li> 
		                    <li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">jQuery UI</a>
		                    </li>  
		                    {{-- searchbuilder / integration --}}	                 
							<h3 class="tx"><a href="{{ url('extensions/searchbuilder/integration') }}">Integration</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">StateSave Integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">Buttons Integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">ColReorder Integration</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">SearchPanes Integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchbuilder') }}">SearchPanes, CascadePanes and ViewTotal Integration</a>
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
		                        <a href="{{ url('extensions/searchpanes') }}">Basic Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">API Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Button Initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">SearchPanes Button Configuration</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Collapsed Panes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Change SearchPanes Layout.</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Force Panes to Show/Hide for Specified Columns</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Uniqueness Threshold</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Cascade Panes</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">View Totals and Subtotals</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Viewing Totals, Subtotals and Cascading Panes</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Pre-Select Rows with Cascade</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Pre-Select Rows</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/range_filtering') }}">Ajax Loaded SearchPanes Options</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/plug_ins/dom_sort') }}">Disable Clear Buttons for Panes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Speed Optimisation</a>
		                    </li>
		                    {{-- searchpanes / advanced --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/advanced') }}">Advanced initialisation</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">StateSave</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">able with empty cells</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Empty Table</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Abstract Types</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Column Filter Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Long Data in Panes</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Integration with DataTables Rendering Function</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Using Render Function to Create Custom Options</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Rendering Arrays</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">HTML Entities from the DOM</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">HTML Entities from Ajax</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Unencoded HTML characters with a Rendering Function from Ajax</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">HTML Entities from an Ajax Request with a Rendering Function</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Dealing with unusual characters</a>
		                    </li>
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Selection style to work with mobile devices</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Deleting rows Mid-search</a>
		                    </li>
		                    {{-- searchpanes / customisation --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/customisation') }}">Customisation</a></h3>									                    
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Panes Vertically Stacked next to DataTable</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Panes in footer of DataTable</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Pane customisation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Button text</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Custom Pane Title</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Custom Pane Class</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Internationalisation Language Options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Custom Pane Order</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Hide Count Column</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Hide Count Column on Specific Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Hide Ordering Buttons</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Hide Ordering Buttons on Specific Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Hide Collapsing Button</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Hide Collapsing Button on Specific Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Hide All Controls</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Hide All Controls on Specific Pane</a>
		                    </li>
		                    {{-- searchpanes / integration --}}
		                     <h3 class="tx"><a href="{{ url('extensions/searchpanes/integration') }}">Integration with other DataTables extensions</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Buttons Integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">ColReorder Integration</a>
		                    </li>
		                    {{-- searchpanes / customisation --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/customisation') }}">Creation of custom panes</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Custom Filtering Options</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Custom Filtering Pane</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Custom Filtering Pane with PreSelections</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Only Custom Panes</a>
		                    </li>
		                    {{-- searchpanes / styling --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/styling') }}">Styling</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Foundation</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">jQuery UI</a>
		                    </li>
		                    {{-- searchpanes / performance --}}
		                    <h3 class="tx"><a href="{{ url('extensions/searchpanes/performance') }}">Performance</a></h3>								                    
							<li>
		                        <a href="{{ url('extensions/searchpanes') }}">5k Rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">50k Rows</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">50k Rows with cascadePanes</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('extensions/searchpanes') }}">50k Rows with cascadePanes and viewTotal</a>
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