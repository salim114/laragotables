<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<title>DataTables feature - Form inputs</title>
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
		var table = $('#example').DataTable({
			columnDefs: [{
				orderable: false,
				targets: [1,2,3]
			}]
		});

		$('button').click( function() {
			var data = table.$('input, select').serialize();
			alert(
				"The following data would have been submitted to the server: \n\n"+
				data.substr( 0, 120 )+'...'
			);
			return false;
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Form inputs</span></h1>
			<div class="info">
				<p>In order to perform paging, ordering, searching etc, DataTables can remove rows and cells from the document (i.e. those rows / cells which are not needed are
				not inserted into the document). This increases performance and compatibility, however, it means that submitting forms which span multiple pages requires a little
				bit of additional work to get the information that is not in the document any longer.</p>
				<p>The <a href="//datatables.net/reference/api/%24()"><code class="api" title="DataTables API method">$()</code></a> method can be used to get nodes from the
				document regardless of paging, ordering etc. This example shows <a href="//datatables.net/reference/api/%24()"><code class="api" title=
				"DataTables API method">$()</code></a> being used to get all <code class="tag" title="HTML tag">input</code> elements from the table. In the example a simple
				<code>alert()</code> is used to show the information from the form, but an Ajax call to the server with the form data could easily be performed.</p>
				<p>If you are interested in a complete CRUD editing suit for DataTables have a look at the <a href="//editor.datatables.net">Editor extension</a> which provides
				simple setup and complete integration with DataTables.</p>
			</div>
			<div class="demo-html">
				<button type="submit">Submit form</button>
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Position</th>
							<th>Office</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
							<td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
							<td><select size="1" id="row-1-office" name="row-1-office">
								<option value="Edinburgh" selected="selected">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Garrett Winters</td>
							<td><input type="text" id="row-2-age" name="row-2-age" value="63"></td>
							<td><input type="text" id="row-2-position" name="row-2-position" value="Accountant"></td>
							<td><select size="1" id="row-2-office" name="row-2-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo" selected="selected">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Ashton Cox</td>
							<td><input type="text" id="row-3-age" name="row-3-age" value="66"></td>
							<td><input type="text" id="row-3-position" name="row-3-position" value="Junior Technical Author"></td>
							<td><select size="1" id="row-3-office" name="row-3-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Cedric Kelly</td>
							<td><input type="text" id="row-4-age" name="row-4-age" value="22"></td>
							<td><input type="text" id="row-4-position" name="row-4-position" value="Senior Javascript Developer"></td>
							<td><select size="1" id="row-4-office" name="row-4-office">
								<option value="Edinburgh" selected="selected">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Airi Satou</td>
							<td><input type="text" id="row-5-age" name="row-5-age" value="33"></td>
							<td><input type="text" id="row-5-position" name="row-5-position" value="Accountant"></td>
							<td><select size="1" id="row-5-office" name="row-5-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo" selected="selected">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Brielle Williamson</td>
							<td><input type="text" id="row-6-age" name="row-6-age" value="61"></td>
							<td><input type="text" id="row-6-position" name="row-6-position" value="Integration Specialist"></td>
							<td><select size="1" id="row-6-office" name="row-6-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Herrod Chandler</td>
							<td><input type="text" id="row-7-age" name="row-7-age" value="59"></td>
							<td><input type="text" id="row-7-position" name="row-7-position" value="Sales Assistant"></td>
							<td><select size="1" id="row-7-office" name="row-7-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Rhona Davidson</td>
							<td><input type="text" id="row-8-age" name="row-8-age" value="55"></td>
							<td><input type="text" id="row-8-position" name="row-8-position" value="Integration Specialist"></td>
							<td><select size="1" id="row-8-office" name="row-8-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo" selected="selected">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Colleen Hurst</td>
							<td><input type="text" id="row-9-age" name="row-9-age" value="39"></td>
							<td><input type="text" id="row-9-position" name="row-9-position" value="Javascript Developer"></td>
							<td><select size="1" id="row-9-office" name="row-9-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Sonya Frost</td>
							<td><input type="text" id="row-10-age" name="row-10-age" value="23"></td>
							<td><input type="text" id="row-10-position" name="row-10-position" value="Software Engineer"></td>
							<td><select size="1" id="row-10-office" name="row-10-office">
								<option value="Edinburgh" selected="selected">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Jena Gaines</td>
							<td><input type="text" id="row-11-age" name="row-11-age" value="30"></td>
							<td><input type="text" id="row-11-position" name="row-11-position" value="Office Manager"></td>
							<td><select size="1" id="row-11-office" name="row-11-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Quinn Flynn</td>
							<td><input type="text" id="row-12-age" name="row-12-age" value="22"></td>
							<td><input type="text" id="row-12-position" name="row-12-position" value="Support Lead"></td>
							<td><select size="1" id="row-12-office" name="row-12-office">
								<option value="Edinburgh" selected="selected">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Charde Marshall</td>
							<td><input type="text" id="row-13-age" name="row-13-age" value="36"></td>
							<td><input type="text" id="row-13-position" name="row-13-position" value="Regional Director"></td>
							<td><select size="1" id="row-13-office" name="row-13-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Haley Kennedy</td>
							<td><input type="text" id="row-14-age" name="row-14-age" value="43"></td>
							<td><input type="text" id="row-14-position" name="row-14-position" value="Senior Marketing Designer"></td>
							<td><select size="1" id="row-14-office" name="row-14-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Tatyana Fitzpatrick</td>
							<td><input type="text" id="row-15-age" name="row-15-age" value="19"></td>
							<td><input type="text" id="row-15-position" name="row-15-position" value="Regional Director"></td>
							<td><select size="1" id="row-15-office" name="row-15-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Michael Silva</td>
							<td><input type="text" id="row-16-age" name="row-16-age" value="66"></td>
							<td><input type="text" id="row-16-position" name="row-16-position" value="Marketing Designer"></td>
							<td><select size="1" id="row-16-office" name="row-16-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Paul Byrd</td>
							<td><input type="text" id="row-17-age" name="row-17-age" value="64"></td>
							<td><input type="text" id="row-17-position" name="row-17-position" value="Chief Financial Officer (CFO)"></td>
							<td><select size="1" id="row-17-office" name="row-17-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Gloria Little</td>
							<td><input type="text" id="row-18-age" name="row-18-age" value="59"></td>
							<td><input type="text" id="row-18-position" name="row-18-position" value="Systems Administrator"></td>
							<td><select size="1" id="row-18-office" name="row-18-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Bradley Greer</td>
							<td><input type="text" id="row-19-age" name="row-19-age" value="41"></td>
							<td><input type="text" id="row-19-position" name="row-19-position" value="Software Engineer"></td>
							<td><select size="1" id="row-19-office" name="row-19-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Dai Rios</td>
							<td><input type="text" id="row-20-age" name="row-20-age" value="35"></td>
							<td><input type="text" id="row-20-position" name="row-20-position" value="Personnel Lead"></td>
							<td><select size="1" id="row-20-office" name="row-20-office">
								<option value="Edinburgh" selected="selected">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Jenette Caldwell</td>
							<td><input type="text" id="row-21-age" name="row-21-age" value="30"></td>
							<td><input type="text" id="row-21-position" name="row-21-position" value="Development Lead"></td>
							<td><select size="1" id="row-21-office" name="row-21-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Yuri Berry</td>
							<td><input type="text" id="row-22-age" name="row-22-age" value="40"></td>
							<td><input type="text" id="row-22-position" name="row-22-position" value="Chief Marketing Officer (CMO)"></td>
							<td><select size="1" id="row-22-office" name="row-22-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Caesar Vance</td>
							<td><input type="text" id="row-23-age" name="row-23-age" value="21"></td>
							<td><input type="text" id="row-23-position" name="row-23-position" value="Pre-Sales Support"></td>
							<td><select size="1" id="row-23-office" name="row-23-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Doris Wilder</td>
							<td><input type="text" id="row-24-age" name="row-24-age" value="23"></td>
							<td><input type="text" id="row-24-position" name="row-24-position" value="Sales Assistant"></td>
							<td><select size="1" id="row-24-office" name="row-24-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Angelica Ramos</td>
							<td><input type="text" id="row-25-age" name="row-25-age" value="47"></td>
							<td><input type="text" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)"></td>
							<td><select size="1" id="row-25-office" name="row-25-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Gavin Joyce</td>
							<td><input type="text" id="row-26-age" name="row-26-age" value="42"></td>
							<td><input type="text" id="row-26-position" name="row-26-position" value="Developer"></td>
							<td><select size="1" id="row-26-office" name="row-26-office">
								<option value="Edinburgh" selected="selected">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Jennifer Chang</td>
							<td><input type="text" id="row-27-age" name="row-27-age" value="28"></td>
							<td><input type="text" id="row-27-position" name="row-27-position" value="Regional Director"></td>
							<td><select size="1" id="row-27-office" name="row-27-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Brenden Wagner</td>
							<td><input type="text" id="row-28-age" name="row-28-age" value="28"></td>
							<td><input type="text" id="row-28-position" name="row-28-position" value="Software Engineer"></td>
							<td><select size="1" id="row-28-office" name="row-28-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Fiona Green</td>
							<td><input type="text" id="row-29-age" name="row-29-age" value="48"></td>
							<td><input type="text" id="row-29-position" name="row-29-position" value="Chief Operating Officer (COO)"></td>
							<td><select size="1" id="row-29-office" name="row-29-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Shou Itou</td>
							<td><input type="text" id="row-30-age" name="row-30-age" value="20"></td>
							<td><input type="text" id="row-30-position" name="row-30-position" value="Regional Marketing"></td>
							<td><select size="1" id="row-30-office" name="row-30-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo" selected="selected">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Michelle House</td>
							<td><input type="text" id="row-31-age" name="row-31-age" value="37"></td>
							<td><input type="text" id="row-31-position" name="row-31-position" value="Integration Specialist"></td>
							<td><select size="1" id="row-31-office" name="row-31-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Suki Burks</td>
							<td><input type="text" id="row-32-age" name="row-32-age" value="53"></td>
							<td><input type="text" id="row-32-position" name="row-32-position" value="Developer"></td>
							<td><select size="1" id="row-32-office" name="row-32-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Prescott Bartlett</td>
							<td><input type="text" id="row-33-age" name="row-33-age" value="27"></td>
							<td><input type="text" id="row-33-position" name="row-33-position" value="Technical Author"></td>
							<td><select size="1" id="row-33-office" name="row-33-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Gavin Cortez</td>
							<td><input type="text" id="row-34-age" name="row-34-age" value="22"></td>
							<td><input type="text" id="row-34-position" name="row-34-position" value="Team Leader"></td>
							<td><select size="1" id="row-34-office" name="row-34-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Martena Mccray</td>
							<td><input type="text" id="row-35-age" name="row-35-age" value="46"></td>
							<td><input type="text" id="row-35-position" name="row-35-position" value="Post-Sales support"></td>
							<td><select size="1" id="row-35-office" name="row-35-office">
								<option value="Edinburgh" selected="selected">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Unity Butler</td>
							<td><input type="text" id="row-36-age" name="row-36-age" value="47"></td>
							<td><input type="text" id="row-36-position" name="row-36-position" value="Marketing Designer"></td>
							<td><select size="1" id="row-36-office" name="row-36-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Howard Hatfield</td>
							<td><input type="text" id="row-37-age" name="row-37-age" value="51"></td>
							<td><input type="text" id="row-37-position" name="row-37-position" value="Office Manager"></td>
							<td><select size="1" id="row-37-office" name="row-37-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Hope Fuentes</td>
							<td><input type="text" id="row-38-age" name="row-38-age" value="41"></td>
							<td><input type="text" id="row-38-position" name="row-38-position" value="Secretary"></td>
							<td><select size="1" id="row-38-office" name="row-38-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Vivian Harrell</td>
							<td><input type="text" id="row-39-age" name="row-39-age" value="62"></td>
							<td><input type="text" id="row-39-position" name="row-39-position" value="Financial Controller"></td>
							<td><select size="1" id="row-39-office" name="row-39-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Timothy Mooney</td>
							<td><input type="text" id="row-40-age" name="row-40-age" value="37"></td>
							<td><input type="text" id="row-40-position" name="row-40-position" value="Office Manager"></td>
							<td><select size="1" id="row-40-office" name="row-40-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Jackson Bradshaw</td>
							<td><input type="text" id="row-41-age" name="row-41-age" value="65"></td>
							<td><input type="text" id="row-41-position" name="row-41-position" value="Director"></td>
							<td><select size="1" id="row-41-office" name="row-41-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Olivia Liang</td>
							<td><input type="text" id="row-42-age" name="row-42-age" value="64"></td>
							<td><input type="text" id="row-42-position" name="row-42-position" value="Support Engineer"></td>
							<td><select size="1" id="row-42-office" name="row-42-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Bruno Nash</td>
							<td><input type="text" id="row-43-age" name="row-43-age" value="38"></td>
							<td><input type="text" id="row-43-position" name="row-43-position" value="Software Engineer"></td>
							<td><select size="1" id="row-43-office" name="row-43-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Sakura Yamamoto</td>
							<td><input type="text" id="row-44-age" name="row-44-age" value="37"></td>
							<td><input type="text" id="row-44-position" name="row-44-position" value="Support Engineer"></td>
							<td><select size="1" id="row-44-office" name="row-44-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo" selected="selected">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Thor Walton</td>
							<td><input type="text" id="row-45-age" name="row-45-age" value="61"></td>
							<td><input type="text" id="row-45-position" name="row-45-position" value="Developer"></td>
							<td><select size="1" id="row-45-office" name="row-45-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Finn Camacho</td>
							<td><input type="text" id="row-46-age" name="row-46-age" value="47"></td>
							<td><input type="text" id="row-46-position" name="row-46-position" value="Support Engineer"></td>
							<td><select size="1" id="row-46-office" name="row-46-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Serge Baldwin</td>
							<td><input type="text" id="row-47-age" name="row-47-age" value="64"></td>
							<td><input type="text" id="row-47-position" name="row-47-position" value="Data Coordinator"></td>
							<td><select size="1" id="row-47-office" name="row-47-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Zenaida Frank</td>
							<td><input type="text" id="row-48-age" name="row-48-age" value="63"></td>
							<td><input type="text" id="row-48-position" name="row-48-position" value="Software Engineer"></td>
							<td><select size="1" id="row-48-office" name="row-48-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Zorita Serrano</td>
							<td><input type="text" id="row-49-age" name="row-49-age" value="56"></td>
							<td><input type="text" id="row-49-position" name="row-49-position" value="Software Engineer"></td>
							<td><select size="1" id="row-49-office" name="row-49-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Jennifer Acosta</td>
							<td><input type="text" id="row-50-age" name="row-50-age" value="43"></td>
							<td><input type="text" id="row-50-position" name="row-50-position" value="Junior Javascript Developer"></td>
							<td><select size="1" id="row-50-office" name="row-50-office">
								<option value="Edinburgh" selected="selected">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Cara Stevens</td>
							<td><input type="text" id="row-51-age" name="row-51-age" value="46"></td>
							<td><input type="text" id="row-51-position" name="row-51-position" value="Sales Assistant"></td>
							<td><select size="1" id="row-51-office" name="row-51-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Hermione Butler</td>
							<td><input type="text" id="row-52-age" name="row-52-age" value="47"></td>
							<td><input type="text" id="row-52-position" name="row-52-position" value="Regional Director"></td>
							<td><select size="1" id="row-52-office" name="row-52-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Lael Greer</td>
							<td><input type="text" id="row-53-age" name="row-53-age" value="21"></td>
							<td><input type="text" id="row-53-position" name="row-53-position" value="Systems Administrator"></td>
							<td><select size="1" id="row-53-office" name="row-53-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London" selected="selected">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Jonas Alexander</td>
							<td><input type="text" id="row-54-age" name="row-54-age" value="30"></td>
							<td><input type="text" id="row-54-position" name="row-54-position" value="Developer"></td>
							<td><select size="1" id="row-54-office" name="row-54-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco" selected="selected">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Shad Decker</td>
							<td><input type="text" id="row-55-age" name="row-55-age" value="51"></td>
							<td><input type="text" id="row-55-position" name="row-55-position" value="Regional Director"></td>
							<td><select size="1" id="row-55-office" name="row-55-office">
								<option value="Edinburgh" selected="selected">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Michael Bruce</td>
							<td><input type="text" id="row-56-age" name="row-56-age" value="29"></td>
							<td><input type="text" id="row-56-position" name="row-56-position" value="Javascript Developer"></td>
							<td><select size="1" id="row-56-office" name="row-56-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
						<tr>
							<td>Donna Snider</td>
							<td><input type="text" id="row-57-age" name="row-57-age" value="27"></td>
							<td><input type="text" id="row-57-position" name="row-57-position" value="Customer Support"></td>
							<td><select size="1" id="row-57-office" name="row-57-office">
								<option value="Edinburgh">
									Edinburgh
								</option>
								<option value="London">
									London
								</option>
								<option value="New York" selected="selected">
									New York
								</option>
								<option value="San Francisco">
									San Francisco
								</option>
								<option value="Tokyo">
									Tokyo
								</option>
							</select></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Position</th>
							<th>Office</th>
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
							var table = $('#example').DataTable({
								columnDefs: [{
									orderable: false,
									targets: [1,2,3]
								}]
							});

							$('button').click( function() {
								var data = table.$('input, select').serialize();
								alert(
									&quot;The following data would have been submitted to the server: \n\n&quot;+
									data.substr( 0, 120 )+'...'
								);
								return false;
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
				<div id="route" class="route">
					<p>The route shown below may be accessed by entering the defined route's URL in your browser:</p>
					<code class="multiline language-route">
						<&#63;php

						use Illuminate\Support\Facades\Route; 
						use App\Http\Controllers\DatatableController;

						/*
						|--------------------------------------------------------------------------
						| Web Routes
						|--------------------------------------------------------------------------
						|
						| Here is where you can register web routes for your application. These
						| routes are loaded by the RouteServiceProvider within a group which
						| contains the "web" middleware group. Now create something great!
						|
						*/
						
						//API (features)

						Route::group([], function() {
						    
						    Route::get('features/api/form', 'App\Http\Controllers\DatatableController&#64;form');

						});</code>
					<p>In addition to the above route, the "web.php" file includes all the routes from the other examples (features) which i deliberately hide to keep focus on each features separately.</p>
				</div>
				<div id="controller" class="ctrl">
					<p>The controller shown below is used to defining all of your request handling logic you may wish to organize seperetly from your route files:</p>
					<code class="multiline language-ctrl">
						<&#63;php

						namespace App\Http\Controllers;

						use Illuminate\Http\Request;
						Use App\Models\Datatable;
						use DataTables;

						class DatatableController extends Controller
						{
						    /**
						     * Display a listing of the resource.
						     *
						     * &#64;return \Illuminate\Http\Response
						     */

					    //API (features)

					    public function form()
					    {
					        $datatables = Datatable::all();
					        return view('features.api.form', compact('datatables'));       
					    }</code>
					<p>In addition to the above code, the "DatatableController.php" file includes all classes from the other examples (features) which i deliberately hide to keep focus on each features separately.</p>
					</div>
				<div id="model" class="model">
					<p>Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table:</p>
					<code class="multiline language-model">
						<&#63;php

						namespace App\Models;

						use Illuminate\Database\Eloquent\Factories\HasFactory;
						use Illuminate\Database\Eloquent\Model;

						class Datatable extends Model
						{
						    use HasFactory;

						    protected $fillable = [
						        
						        'id', 'first_name', 'last_name', 'name_abrv', 'position', 'email', 'office', 'start_date_epoch', 
						        'start_date', 'age', 'salary', 'seq', 'extn'
						    ];
						}</code>
					<p>In addition to the above code, the "Datatable.php" file (Model) will manage ,work and support all common relationships with ease.</p>
				</div>
			</div>
		</section>
	</div>
	<section>
		@include('layouts.footer')	
	</section>
</body>
</html>