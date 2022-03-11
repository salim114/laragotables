<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Row grouping</title>	
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">
	
	tr.group,
	tr.group:hover {
		background-color: #ddd !important;
	}

	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" class="init">
	
	$(document).ready(function() {
		var groupColumn = 2;
		var table = $('#example').DataTable({
			"columnDefs": [
				{ "visible": false, "targets": groupColumn }
			],
			"order": [[ groupColumn, 'asc' ]],
			"displayLength": 25,
			"drawCallback": function ( settings ) {
				var api = this.api();
				var rows = api.rows( {page:'current'} ).nodes();
				var last=null;

				api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
					if ( last !== group ) {
						$(rows).eq( i ).before(
							'<tr class="group"><td colspan="5">'+group+'</td></tr>'
						);

						last = group;
					}
				} );
			}
		} );

		// Order by the grouping
		$('#example tbody').on( 'click', 'tr.group', function () {
			var currentOrder = table.order()[0];
			if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
				table.order( [ groupColumn, 'desc' ] ).draw();
			}
			else {
				table.order( [ groupColumn, 'asc' ] ).draw();
			}
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Row grouping</span></h1>
			<div class="info">
				<p>Although DataTables doesn't have row grouping built-in (picking one of the many methods available would overly limit the DataTables core), it is most certainly
				possible to give the look and feel of row grouping.</p>
				<p>In the example below the 'group' is the office location, which is based on the information in the third column (which is set to hidden). The grouping indicator
				is added by the <a href="//datatables.net/reference/option/drawCallback"><code class="option" title="DataTables initialisation option">drawCallback</code></a>
				function, which will parse through the rows which are displayed, and enter a grouping TR element where a new group is found. A <code>click</code> event handler is
				added for the grouping rows to allow the grouping order to be restored as well as ordering by any other column.</p>
				<h3 data-anchor="RowGroup-extension"><a name="RowGroup-extension" id="RowGroup-extension"></a>RowGroup extension</h3>
				<p>Important note: DataTables now has a <a href="https://datatables.net/extensions/rowgroup">RowGroup</a> extension that provides a formal API for the abilities in
				this demo and extends upon them in a number of significant and useful ways. This example is retained as a useful demonstration of how the <a href=
				"//datatables.net/reference/option/drawCallback"><code class="option" title="DataTables initialisation option">drawCallback</code></a> option can be used, but for
				new sites that make use of row grouping, it is suggested that you use the new RowGroup extension.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($datatables as $datatable)
	<tr>
							<td>{{$datatable->first_name}} {{$datatable->last_name}}</td>
							<td>{{$datatable->position}}</td>
							<td>{{$datatable->office}}</td>
							<td>{{$datatable->age}}</td>
							<td>{{date('Y/m/d', strtotime($datatable->start_date));}}</td>
							<td>${{number_format($datatable->salary, 0, '.', ',') }}</td>
						</tr>
					@endforeach
</tbody>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
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
					<p>The Javascript shown below is used to initialise the table shown in this example:</p><code class="multiline language-js">
						$(document).ready(function() {
							var groupColumn = 2;
							var table = $('#example').DataTable({
								&quot;columnDefs&quot;: [
									{ &quot;visible&quot;: false, &quot;targets&quot;: groupColumn }
								],
								&quot;order&quot;: [[ groupColumn, 'asc' ]],
								&quot;displayLength&quot;: 25,
								&quot;drawCallback&quot;: function ( settings ) {
									var api = this.api();
									var rows = api.rows( {page:'current'} ).nodes();
									var last=null;

									api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
										if ( last !== group ) {
											$(rows).eq( i ).before(
												'&lt;tr class=&quot;group&quot;&gt;&lt;td colspan=&quot;5&quot;&gt;'+group+'&lt;/td&gt;&lt;/tr&gt;'
											);

											last = group;
										}
									} );
								}
							} );

							// Order by the grouping
							$('#example tbody').on( 'click', 'tr.group', function () {
								var currentOrder = table.order()[0];
								if ( currentOrder[0] === groupColumn &amp;&amp; currentOrder[1] === 'asc' ) {
									table.order( [ groupColumn, 'desc' ] ).draw();
								}
								else {
									table.order( [ groupColumn, 'asc' ] ).draw();
								}
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
						additional CSS used is shown below:</p>
						<code class="multiline language-css">
							tr.group,
							tr.group:hover {
								background-color: #ddd !important;
							}</code>
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