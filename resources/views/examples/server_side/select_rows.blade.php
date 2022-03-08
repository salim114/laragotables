<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables example - Row selection</title>
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">
	
	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/1.11.5/dataRender/datetime.js"></script>
	<script type="text/javascript" language="javascript" class="init">

	$(document).ready(function() {
		var selected = [];

		$("#example").DataTable({
			"processing": true,
			"serverSide": true,
			ajax: "{{ route('select_rows') }}",
	        columns: [
	            {data: 'first_name', name: 'first_name'},
	            {data: 'last_name', name: 'last_name'},
	            {data: 'position', name: 'email'},
	            {data: 'office', name: 'office'},
	            {data: 'start_date',  
	            render: $.fn.dataTable.render.moment('', 'Do MMM YY')
	            },  
	            {data: 'salary', 
	            render: $.fn.dataTable.render.number( ',', '.', 0, '$' )
	        	}
			],
			"rowCallback": function( row, data ) {
				if ( $.inArray(data.DT_RowId, selected) !== -1 ) {
					$(row).addClass('selected');
				}
			}
		});

		$('#example tbody').on('click', 'tr', function () {
			var id = this.id;
			var index = $.inArray(id, selected);

			if ( index === -1 ) {
				selected.push( id );
			} else {
				selected.splice( index, 1 );
			}

			$(this).toggleClass('selected');
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Row selection</span></h1>
			<div class="info">
				<p>When you want to have user selectable rows in DataTables, it is relatively trivial when using DOM based data - but when using server-side processing, DataTables
				doesn't retain DOM row elements over pages / filtering etc. As such, you will need to keep a track of which rows a user as selected and mark them as selected on
				each draw.</p>
				<p>This is shown in this demo, which uses a unique ID assigned to the TR element (this is done automatically through the use of the <code>DT_RowId</code> special
				property returned as part of the object given by the server for each row) to track which rows are selected and reselect them is appropriate on a draw.</p>
				<p>If you are looking for a more complete and easier to use row selection option, the <a href="https://datatables.net/extras/select">Select extension</a> provides
				an API that is fully integrated with DataTables for selecting rows and acting upon that selection.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>First name</th>
							<th>Last name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>First name</th>
							<th>Last name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<ul class="tabs">
				<li class="active">Javascript</li>
				<li>HTML</li>
				<li>CSS</li>
				<li>Ajax</li>
				<li>Server-side script</li>
				<li>Route</li>
				<li>Controller</li>
				<li>Model</li>
			</ul>
			<div class="tabs">
				<div class="js">
					<p>The Javascript shown below is used to initialise the table shown in this example:</p>
					<code class="multiline language-js">
						$(document).ready(function() {
							var selected = [];

							$(&quot;#example&quot;).DataTable({
								&quot;processing&quot;: true,
								&quot;serverSide&quot;: true,
								&quot;ajax&quot;: &quot;scripts/ids-arrays.php&quot;,
								&quot;rowCallback&quot;: function( row, data ) {
									if ( $.inArray(data.DT_RowId, selected) !== -1 ) {
										$(row).addClass('selected');
									}
								}
							});

							$('#example tbody').on('click', 'tr', function () {
								var id = this.id;
								var index = $.inArray(id, selected);

								if ( index === -1 ) {
									selected.push( id );
								} else {
									selected.splice( index, 1 );
								}

								$(this).toggleClass('selected');
							} );
						} );</code>
					<p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>
					<ul>
						<li>
							<a href="https://code.jquery.com/jquery-3.5.1.js">https://code.jquery.com/jquery-3.5.1.js</a>
						</li>
						<li>
							<a href="{{ url('js/jquery.dataTables.js') }}">public/js/jquery.dataTables.js</a>
						</li>
					</ul>
				</div>
				<div class="table">
					<p>The HTML shown below is the raw HTML table element, before it has been enhanced by DataTables:</p>
				</div>
				<div class="css">
					<div>
						<p>This example uses a little bit of additional CSS beyond what is loaded from the library files (below), in order to correctly display the table. The
						additional CSS used is shown below:</p><code class="multiline language-css"></code>
					</div>
					<p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>
					<ul>
						<li>
							<a href="{{ url('css/jquery.dataTables.css') }}">public/css/jquery.dataTables.css</a>
						</li>
					</ul>
				</div>
				<div class="ajax">
					<p>This table loads data by Ajax. The latest data that has been loaded is shown below. This data will update automatically as any additional data is
					loaded.</p>
				</div>
				<div class="php">
					<p>The script used to perform the server-side processing for this table is shown below. Please note that this is just an example script using PHP. Server-side
					processing scripts can be written in any language, using <a href="//datatables.net/manual/server-side">the protocol described in the DataTables
					documentation</a>.</p>
				</div>
			</div>
		</section>
	</div>
	<section>
		@include('layouts.footer')	
	</section>
</body>
</html>