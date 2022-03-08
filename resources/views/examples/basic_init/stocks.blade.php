<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
	<title>DataTables example - Example of stocks results</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<style type="text/css" class="init">
	
	</style>
	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<script type="text/javascript" language="javascript" class="init">
	
	$(document).ready(function() {
	    var stock_data = [
	        {
	            "name": "ACME Gadgets",
	            "symbol": "AGDTS",
	            "last": [2.57, 2.54, 2.54, 2.56, 2.57, 2.58, 2.59]
	        },
	        {
	            "name": "Spry Media Productions",
	            "symbol": "SPMP",
	            "last": [1.12, 1.11, 1.08, 1.08, 1.09, 1.11, 1.08]
	        },
	        {
	            "name": "Widget Emporium",
	            "symbol": "WDEMP",
	            "last": [3.40, 3.39, 3.46, 3.51, 3.50, 3.48, 3.49]
	        },
	        {
	            "name": "Sole Goodman",
	            "symbol": "SGMAN",
	            "last": [16.20, 16.40, 16.36, 16.35, 16.61, 16.46, 16.19]
	        },
	        {
	            "name": "Stanler Bits and Bobs",
	            "symbol": "SBIBO",
	            "last": [82.51, 83.47, 83.40, 83.68, 83.81, 83.29, 83.72]
	        }
	    ];

	    let table = $('#example').DataTable({
	        ajax: function(dataSent, callback, settings) {
	            let data = this.api().ajax.json();
	            if(data == undefined) {
	                data = stock_data;
	            } else {
	                data = data.data;
	                for(i = 0; i < data.length; i++) {
	                    data[i].last.push(data[i].last.shift())
	                }
	            }

	            callback({data: data});
	        },
	        paging: false,
	        initComplete: function() {
	            let api = this.api();
	            setInterval(function() {
	                api.ajax.reload();
	            }, 5000);
	        },
	        drawCallback: function() {
	            $('.sparkline')
	                .map(function() {
	                    return $('canvas', this).length ? null : this;
	                })
	                .sparkline('html', {
	                    type: 'line',
	                    width: '250px'
	                })
	        },
	        columns: [
	            {
	                data: 'name'
	            },
	            {
	                data: 'symbol'
	            },
	            {
	                data: null,
	                render: function(data, type, row, meta) {
	                    return row.last[row.last.length - 1].toFixed(2);
	                }
	            },
	            {
	                data: null,
	                render: function(data, type, row, meta) {
	                    var val = (row.last[row.last.length - 1] - row.last[row.last.length - 2]).toFixed(2);
	                    var colour = val < 0 ? 'red' : 'green'
	                    return type === 'display' ?
	                        '<span style="color:' + colour + '">' + val + '</span>' :
	                        val;
	                }
	            },
	            {
	                data: 'last',
	                render: function(data, type, row, meta) {
	                    return type === 'display' ?
	                        '<span class="sparkline">' + data.toString() + '</span>' :
	                        data;
	                }
	            }
	        ]
	    });
	});

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Example of stocks results</span></h1>
			<div class="info">
				<p>Data within DataTables can be easily rendered to add graphics or colour to your tables, as demonstrated in the example on this page. These examples make use of
				<a href="//datatables.net/reference/option/columns.render"><code class="option" title="DataTables initialisation option">columns.render</code></a> and <a href=
				"//datatables.net/reference/option/drawCallback"><code class="option" title="DataTables initialisation option">drawCallback</code></a> to customise the cells in
				three ways:</p>
				<ul class="markdown">
					<li>the colour of the cell is determine by the relative price of the stock</li>
					<li>a 'sparkline' class is added to the numeric array in the 'last' column</li>
					<li>the jQuery Sparklines plugin is called to turn that array into a line graph</li>
				</ul>
				<p>See the <a href="https://datatables.net/manual/data/renderers">data rendering manual page</a> for more details on how to use data renderers. Also, this example
				uses <a href="https://datatables.net/manual/ajax">Ajax to load the data</a>. This articifially cycles through some pre-canned numbers, but if you have access to a
				financial Ajax feed, you could create a DataTable to display that. More <a href="{{ url('examples/ajax/index') }}">Ajax examples are available</a>.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display nowrap" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Symbol</th>
							<th>Price</th>
							<th>Difference</th>
							<th>Last</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Symbol</th>
							<th>Price</th>
							<th>Difference</th>
							<th>Last</th>
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
						    var stock_data = [
						        {
						            &quot;name&quot;: &quot;ACME Gadgets&quot;,
						            &quot;symbol&quot;: &quot;AGDTS&quot;,
						            &quot;last&quot;: [2.57, 2.54, 2.54, 2.56, 2.57, 2.58, 2.59]
						        },
						        {
						            &quot;name&quot;: &quot;Spry Media Productions&quot;,
						            &quot;symbol&quot;: &quot;SPMP&quot;,
						            &quot;last&quot;: [1.12, 1.11, 1.08, 1.08, 1.09, 1.11, 1.08]
						        },
						        {
						            &quot;name&quot;: &quot;Widget Emporium&quot;,
						            &quot;symbol&quot;: &quot;WDEMP&quot;,
						            &quot;last&quot;: [3.40, 3.39, 3.46, 3.51, 3.50, 3.48, 3.49]
						        },
						        {
						            &quot;name&quot;: &quot;Sole Goodman&quot;,
						            &quot;symbol&quot;: &quot;SGMAN&quot;,
						            &quot;last&quot;: [16.20, 16.40, 16.36, 16.35, 16.61, 16.46, 16.19]
						        },
						        {
						            &quot;name&quot;: &quot;Stanler Bits and Bobs&quot;,
						            &quot;symbol&quot;: &quot;SBIBO&quot;,
						            &quot;last&quot;: [82.51, 83.47, 83.40, 83.68, 83.81, 83.29, 83.72]
						        }
						    ];

						    let table = $('#example').DataTable({
						        ajax: function(dataSent, callback, settings) {
						            let data = this.api().ajax.json();
						            if(data == undefined) {
						                data = stock_data;
						            } else {
						                data = data.data;
						                for(i = 0; i &lt; data.length; i++) {
						                    data[i].last.push(data[i].last.shift())
						                }
						            }

						            callback({data: data});
						        },
						        paging: false,
						        initComplete: function() {
						            let api = this.api();
						            setInterval(function() {
						                api.ajax.reload();
						            }, 5000);
						        },
						        drawCallback: function() {
						            $('.sparkline')
						                .map(function() {
						                    return $('canvas', this).length ? null : this;
						                })
						                .sparkline('html', {
						                    type: 'line',
						                    width: '250px'
						                })
						        },
						        columns: [
						            {
						                data: 'name'
						            },
						            {
						                data: 'symbol'
						            },
						            {
						                data: null,
						                render: function(data, type, row, meta) {
						                    return row.last[row.last.length - 1].toFixed(2);
						                }
						            },
						            {
						                data: null,
						                render: function(data, type, row, meta) {
						                    var val = (row.last[row.last.length - 1] - row.last[row.last.length - 2]).toFixed(2);
						                    var colour = val &lt; 0 ? 'red' : 'green'
						                    return type === 'display' ?
						                        '&lt;span style=&quot;color:' + colour + '&quot;&gt;' + val + '&lt;/span&gt;' :
						                        val;
						                }
						            },
						            {
						                data: 'last',
						                render: function(data, type, row, meta) {
						                    return type === 'display' ?
						                        '&lt;span class=&quot;sparkline&quot;&gt;' + data.toString() + '&lt;/span&gt;' :
						                        data;
						                }
						            }
						        ]
						    });
						});</code>
					<p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>
					<ul>
						<li>
							<a href="https://code.jquery.com/jquery-3.5.1.js">https://code.jquery.com/jquery-3.5.1.js</a>
						</li>
						<li>
							<a href="{{ url('js/jquery.dataTables.js') }}">public/js/jquery.dataTables.js</a>
						</li>
						<li>
							<a href=
							"https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js">https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js</a>
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