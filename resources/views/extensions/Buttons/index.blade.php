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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<title>DataTables extensions - Buttons</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables extensions <span>Buttons</span></h1>
			<div class="info">
				<p>A common UI paradigm to use with interactive tables is to present buttons that will trigger some action - that may be to alter the table's state, modify the data in the table, gather the data from the table or even to activate some external process. Showing such buttons is an interface that end users are comfortable with, making them feel at home with the table.

				The Buttons library for DataTables provides a framework with common options and API that can be used with DataTables, but is also very extensible, recognising that you will likely want to use buttons which perform an action unique to your applications.

				Buttons has <a href="https://datatables.net/extensions/buttons/built-in">four sets of plug-ins</a> that are part of the core software - they are not built into the core, but rather than be included as and when you need them, selecting only the software you require. Other extensions such as <a href="https://editor.datatables.net/">Editor</a> and <a href="{{ url('extensions/select') }}">Select</a> also provide buttons for use with this library, with actions unique to their own behaviours. This ensures a consistent interface for the interactions performed with your tables.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features/advanced_init') }}"><i class="fa fa-arrow-circle-right"></i> Buttons</a></h3>
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
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Foundation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Bulma</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">jQuery UI</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Semantic UI</a>
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
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Foundation</a>
		                    </li>		                    
							<li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_grouping') }}">Bulma</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('features/advanced_init/row_callback') }}">jQuery UI</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/advanced_init/dom_toolbar') }}">Icons</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/advanced_init/dom_toolbar') }}">Dropup collection</a>
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