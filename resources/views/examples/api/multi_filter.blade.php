<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables example - Individual column searching (text inputs)</title>
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">
	
	tfoot input {
		width: 100%;
		padding: 3px;
		box-sizing: border-box;
	}

	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" class="init">
	
	$(document).ready(function() {
		// Setup - add a text input to each footer cell
		$('#example tfoot th').each( function () {
			var title = $(this).text();
			$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
		} );

		// DataTable
		var table = $('#example').DataTable({
			initComplete: function () {
				// Apply the search
				this.api().columns().every( function () {
					var that = this;

					$( 'input', this.footer() ).on( 'keyup change clear', function () {
						if ( that.search() !== this.value ) {
							that
								.search( this.value )
								.draw();
						}
					} );
				} );
			}
		});

	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Individual column searching (text inputs)</span></h1>
			<div class="info">
				<p>The searching functionality provided by DataTables is useful for quickly search through the information in the table - however the search is global, and you may
				wish to present controls that search on specific columns.</p>
				<p>DataTables has the ability to apply searching to a specific column through the <a href="//datatables.net/reference/api/column().search()"><code class="api"
				title="DataTables API method">column().search()</code></a> method (note that the name of the method is <code>search</code> not <code>filter</code>, since <a href=
				"//datatables.net/reference/api/filter()"><code class="api" title="DataTables API method">filter()</code></a> is used to apply a filter to a result set).</p>
				<p>The column searches are cumulative, so you can apply multiple individual column searches, in addition to the global search, allowing complex searching options
				to be presented to the user.</p>
				<p>This examples shows text elements being used with the <a href="//datatables.net/reference/api/column().search()"><code class="api" title=
				"DataTables API method">column().search()</code></a> method to add input controls in the footer of the table for each column. Note that the
				<code>*index*:visible</code> option is used for the column selector to ensure that the <a href="//datatables.net/reference/api/column()"><code class="api" title=
				"DataTables API method">column()</code></a> method takes into account any hidden columns when selecting the column to act upon. <a href=
				"//datatables.net/reference/option/initComplete"><code class="option" title="DataTables initialisation option">initComplete</code></a> is used to allow for any
				asynchronous actions, such as Ajax loading of data or language information.</p>
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
							// Setup - add a text input to each footer cell
							$('#example tfoot th').each( function () {
								var title = $(this).text();
								$(this).html( '&lt;input type=&quot;text&quot; placeholder=&quot;Search '+title+'&quot; /&gt;' );
							} );

							// DataTable
							var table = $('#example').DataTable({
								initComplete: function () {
									// Apply the search
									this.api().columns().every( function () {
										var that = this;

										$( 'input', this.footer() ).on( 'keyup change clear', function () {
											if ( that.search() !== this.value ) {
												that
													.search( this.value )
													.draw();
											}
										} );
									} );
								}
							});

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
							tfoot input {
								width: 100%;
								padding: 3px;
								box-sizing: border-box;
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