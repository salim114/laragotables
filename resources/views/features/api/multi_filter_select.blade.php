<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables feature - Individual column searching (select inputs)</title>
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
	<script type="text/javascript" language="javascript" class="init">
	
	$(document).ready(function() {
		$('#example').DataTable( {
			initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Individual column searching (select inputs)</span></h1>
			<div class="info">
				<p>This example is almost identical to text based individual column example and provides the same functionality, but in this case using <code class="tag" title=
				"HTML tag">select</code> input controls.</p>
				<p>After the table is initialised, the API is used to build the <code class="tag" title="HTML tag">select</code> inputs through the use of <a href=
				"//datatables.net/reference/api/columns().every()"><code class="api" title="DataTables API method">columns().every()</code></a> to loop over the columns (the
				<a href="//datatables.net/reference/api/columns()"><code class="api" title="DataTables API method">columns()</code></a> selector can also be used to limit the
				selected columns if required), then the <a href="//datatables.net/reference/api/column().data()"><code class="api" title=
				"DataTables API method">column().data()</code></a> method is used to get the data for each column in turn. The helper methods <a href=
				"//datatables.net/reference/api/unique()"><code class="api" title="DataTables API method">unique()</code></a> and <a href=
				"//datatables.net/reference/api/sort()"><code class="api" title="DataTables API method">sort()</code></a> are also used to reduce the data for set input to unique
				and ordered elements. Finally the <code>change</code> event from the <code class="tag" title="HTML tag">select</code> input is used to trigger a column search
				using the <a href="//datatables.net/reference/api/column().search()"><code class="api" title="DataTables API method">column().search()</code></a> method.</p>
				<p>Note that the <a href="//datatables.net/reference/api/column().search()"><code class="api" title="DataTables API method">column().search()</code></a> method in
				this particular case performs an exact match through the use of a custom regular expression and disabling DataTables built-in smart searching. For more information
				on the search options in DataTables API, please refer to the documentation for <a href="//datatables.net/reference/api/search()"><code class="api" title=
				"DataTables API method">search()</code></a>, <a href="//datatables.net/reference/api/column().search()"><code class="api" title=
				"DataTables API method">column().search()</code></a> and <a href="//datatables.net/reference/api/%24.fn.dataTable.util.escapeRegex()"><code class="api" title=
				"DataTables API method">$.fn.dataTable.util.escapeRegex()</code></a> which are used for searching globally, by column and escaping regular expressions
				respectively.</p>
				<p>Also note this example demonstrates the use of <a href="//datatables.net/reference/option/initComplete"><code class="option" title=
				"DataTables initialisation option">initComplete</code></a>, a callback function triggered when the table has fully loaded. Use of this callback isn't required in
				this example since the data is available in the table on load, but in the case of Ajax loaded data, <a href=
				"//datatables.net/reference/option/initComplete"><code class="option" title="DataTables initialisation option">initComplete</code></a> is useful to execute code
				after the data has been loaded.</p>
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
					<p>The Javascript shown below is used to initialise the table shown in this example:</p>
					<code class="multiline language-js">
						$(document).ready(function() {
							$('#example').DataTable( {
								initComplete: function () {
									this.api().columns().every( function () {
										var column = this;
										var select = $('&lt;select&gt;&lt;option value=&quot;&quot;&gt;&lt;/option&gt;&lt;/select&gt;')
											.appendTo( $(column.footer()).empty() )
											.on( 'change', function () {
												var val = $.fn.dataTable.util.escapeRegex(
													$(this).val()
												);

												column
													.search( val ? '^'+val+'$' : '', true, false )
													.draw();
											} );

										column.data().unique().sort().each( function ( d, j ) {
											select.append( '&lt;option value=&quot;'+d+'&quot;&gt;'+d+'&lt;/option&gt;' )
										} );
									} );
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