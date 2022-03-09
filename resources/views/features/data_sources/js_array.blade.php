<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables example - Javascript sourced data</title>
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
	
	var dataSet = [
		[ "Abdelhalim Saidi", "Head of Service ADM", "Algiers", "4322", "2006/07/01", "$120,000" ],
	    [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
	    [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
	    [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
	    [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
	    [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
	    [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
	    [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
	    [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
	    [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
	    [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
	    [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
	    [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
	    [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
	    [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
	    [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
	    [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
	    [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
	    [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
	    [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
	    [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
	    [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
	    [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
	    [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
	    [ "Doris Wilder", "Sales Assistant", "Sydney", "3023", "2010/09/20", "$85,600" ],
	    [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
	    [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
	    [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
	    [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
	    [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
	    [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
	    [ "Michelle House", "Integration Specialist", "Sydney", "2769", "2011/06/02", "$95,400" ],
	    [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
	    [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
	    [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
	    [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
	    [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
	];

	$(document).ready(function() {
		$('#example').DataTable( {
			data: dataSet,
			columns: [
				{ title: "Name" },
				{ title: "Position" },
				{ title: "Office" },
				{ title: "Extn." },
				{ title: "Start date" },
				{ title: "Salary" }
			]
		} );
	} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Javascript sourced data</span></h1>
			<div class="info">
				<p>At times you will wish to be able to create a table from dynamic information passed directly to DataTables, rather than having it read from the document. This
				is achieved using the <a href="//datatables.net/reference/option/data"><code class="option" title="DataTables initialisation option">data</code></a> option in the
				initialisation object, passing in an array of data to be used (like all other DataTables handled data, this can be arrays or objects using the <a href=
				"//datatables.net/reference/option/columns.data"><code class="option" title="DataTables initialisation option">columns.data</code></a> option).</p>
				<p>A <code class="tag" title="HTML tag">table</code> must be available on the page for DataTables to use. This features shows an empty <code class="tag" title=
				"HTML tag">table</code> element being initialising as a DataTable with a set of data from a Javascript array. The columns in the table are dynamically created
				based on the <a href="//datatables.net/reference/option/columns.title"><code class="option" title="DataTables initialisation option">columns.title</code></a>
				configuration option.</p>
			</div>
			<div class="demo-html">
				<table id="example" class="display" width="100%"></table>
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
					<p>The Javascript shown below is used to initialise the table shown in this example:</p><code class="multiline language-js">var dataSet = [
						[ &quot;Abdelhalim Saidi&quot;, &quot;Head of Service ADM&quot;, &quot;Algiers&quot;, &quot;1616&quot;, &quot;2006/07/01&quot;, &quot;$120,000&quot; ],
					    [ &quot;Tiger Nixon&quot;, &quot;System Architect&quot;, &quot;Edinburgh&quot;, &quot;5421&quot;, &quot;2011/04/25&quot;, &quot;$320,800&quot; ],
					    [ &quot;Garrett Winters&quot;, &quot;Accountant&quot;, &quot;Tokyo&quot;, &quot;8422&quot;, &quot;2011/07/25&quot;, &quot;$170,750&quot; ],
					    [ &quot;Ashton Cox&quot;, &quot;Junior Technical Author&quot;, &quot;San Francisco&quot;, &quot;1562&quot;, &quot;2009/01/12&quot;, &quot;$86,000&quot; ],
					    [ &quot;Cedric Kelly&quot;, &quot;Senior Javascript Developer&quot;, &quot;Edinburgh&quot;, &quot;6224&quot;, &quot;2012/03/29&quot;, &quot;$433,060&quot; ],
					    [ &quot;Airi Satou&quot;, &quot;Accountant&quot;, &quot;Tokyo&quot;, &quot;5407&quot;, &quot;2008/11/28&quot;, &quot;$162,700&quot; ],
					    [ &quot;Brielle Williamson&quot;, &quot;Integration Specialist&quot;, &quot;New York&quot;, &quot;4804&quot;, &quot;2012/12/02&quot;, &quot;$372,000&quot; ],
					    [ &quot;Herrod Chandler&quot;, &quot;Sales Assistant&quot;, &quot;San Francisco&quot;, &quot;9608&quot;, &quot;2012/08/06&quot;, &quot;$137,500&quot; ],
					    [ &quot;Rhona Davidson&quot;, &quot;Integration Specialist&quot;, &quot;Tokyo&quot;, &quot;6200&quot;, &quot;2010/10/14&quot;, &quot;$327,900&quot; ],
					    [ &quot;Colleen Hurst&quot;, &quot;Javascript Developer&quot;, &quot;San Francisco&quot;, &quot;2360&quot;, &quot;2009/09/15&quot;, &quot;$205,500&quot; ],
					    [ &quot;Sonya Frost&quot;, &quot;Software Engineer&quot;, &quot;Edinburgh&quot;, &quot;1667&quot;, &quot;2008/12/13&quot;, &quot;$103,600&quot; ],
					    [ &quot;Jena Gaines&quot;, &quot;Office Manager&quot;, &quot;London&quot;, &quot;3814&quot;, &quot;2008/12/19&quot;, &quot;$90,560&quot; ],
					    [ &quot;Quinn Flynn&quot;, &quot;Support Lead&quot;, &quot;Edinburgh&quot;, &quot;9497&quot;, &quot;2013/03/03&quot;, &quot;$342,000&quot; ],
					    [ &quot;Charde Marshall&quot;, &quot;Regional Director&quot;, &quot;San Francisco&quot;, &quot;6741&quot;, &quot;2008/10/16&quot;, &quot;$470,600&quot; ],
					    [ &quot;Haley Kennedy&quot;, &quot;Senior Marketing Designer&quot;, &quot;London&quot;, &quot;3597&quot;, &quot;2012/12/18&quot;, &quot;$313,500&quot; ],
					    [ &quot;Tatyana Fitzpatrick&quot;, &quot;Regional Director&quot;, &quot;London&quot;, &quot;1965&quot;, &quot;2010/03/17&quot;, &quot;$385,750&quot; ],
					    [ &quot;Michael Silva&quot;, &quot;Marketing Designer&quot;, &quot;London&quot;, &quot;1581&quot;, &quot;2012/11/27&quot;, &quot;$198,500&quot; ],
					    [ &quot;Paul Byrd&quot;, &quot;Chief Financial Officer (CFO)&quot;, &quot;New York&quot;, &quot;3059&quot;, &quot;2010/06/09&quot;, &quot;$725,000&quot; ],
					    [ &quot;Gloria Little&quot;, &quot;Systems Administrator&quot;, &quot;New York&quot;, &quot;1721&quot;, &quot;2009/04/10&quot;, &quot;$237,500&quot; ],
					    [ &quot;Bradley Greer&quot;, &quot;Software Engineer&quot;, &quot;London&quot;, &quot;2558&quot;, &quot;2012/10/13&quot;, &quot;$132,000&quot; ],
					    [ &quot;Dai Rios&quot;, &quot;Personnel Lead&quot;, &quot;Edinburgh&quot;, &quot;2290&quot;, &quot;2012/09/26&quot;, &quot;$217,500&quot; ],
					    [ &quot;Jenette Caldwell&quot;, &quot;Development Lead&quot;, &quot;New York&quot;, &quot;1937&quot;, &quot;2011/09/03&quot;, &quot;$345,000&quot; ],
					    [ &quot;Yuri Berry&quot;, &quot;Chief Marketing Officer (CMO)&quot;, &quot;New York&quot;, &quot;6154&quot;, &quot;2009/06/25&quot;, &quot;$675,000&quot; ],
					    [ &quot;Caesar Vance&quot;, &quot;Pre-Sales Support&quot;, &quot;New York&quot;, &quot;8330&quot;, &quot;2011/12/12&quot;, &quot;$106,450&quot; ],
					    [ &quot;Doris Wilder&quot;, &quot;Sales Assistant&quot;, &quot;Sydney&quot;, &quot;3023&quot;, &quot;2010/09/20&quot;, &quot;$85,600&quot; ],
					    [ &quot;Angelica Ramos&quot;, &quot;Chief Executive Officer (CEO)&quot;, &quot;London&quot;, &quot;5797&quot;, &quot;2009/10/09&quot;, &quot;$1,200,000&quot; ],
					    [ &quot;Gavin Joyce&quot;, &quot;Developer&quot;, &quot;Edinburgh&quot;, &quot;8822&quot;, &quot;2010/12/22&quot;, &quot;$92,575&quot; ],
					    [ &quot;Jennifer Chang&quot;, &quot;Regional Director&quot;, &quot;Singapore&quot;, &quot;9239&quot;, &quot;2010/11/14&quot;, &quot;$357,650&quot; ],
					    [ &quot;Brenden Wagner&quot;, &quot;Software Engineer&quot;, &quot;San Francisco&quot;, &quot;1314&quot;, &quot;2011/06/07&quot;, &quot;$206,850&quot; ],
					    [ &quot;Fiona Green&quot;, &quot;Chief Operating Officer (COO)&quot;, &quot;San Francisco&quot;, &quot;2947&quot;, &quot;2010/03/11&quot;, &quot;$850,000&quot; ],
					    [ &quot;Shou Itou&quot;, &quot;Regional Marketing&quot;, &quot;Tokyo&quot;, &quot;8899&quot;, &quot;2011/08/14&quot;, &quot;$163,000&quot; ],
					    [ &quot;Michelle House&quot;, &quot;Integration Specialist&quot;, &quot;Sydney&quot;, &quot;2769&quot;, &quot;2011/06/02&quot;, &quot;$95,400&quot; ],
					    [ &quot;Suki Burks&quot;, &quot;Developer&quot;, &quot;London&quot;, &quot;6832&quot;, &quot;2009/10/22&quot;, &quot;$114,500&quot; ],
					    [ &quot;Prescott Bartlett&quot;, &quot;Technical Author&quot;, &quot;London&quot;, &quot;3606&quot;, &quot;2011/05/07&quot;, &quot;$145,000&quot; ],
					    [ &quot;Gavin Cortez&quot;, &quot;Team Leader&quot;, &quot;San Francisco&quot;, &quot;2860&quot;, &quot;2008/10/26&quot;, &quot;$235,500&quot; ],
					    [ &quot;Martena Mccray&quot;, &quot;Post-Sales support&quot;, &quot;Edinburgh&quot;, &quot;8240&quot;, &quot;2011/03/09&quot;, &quot;$324,050&quot; ],
					    [ &quot;Unity Butler&quot;, &quot;Marketing Designer&quot;, &quot;San Francisco&quot;, &quot;5384&quot;, &quot;2009/12/09&quot;, &quot;$85,675&quot; ]
					];

					$(document).ready(function() {
						$('#example').DataTable( {
							data: dataSet,
							columns: [
								{ title: &quot;Name&quot; },
								{ title: &quot;Position&quot; },
								{ title: &quot;Office&quot; },
								{ title: &quot;Extn.&quot; },
								{ title: &quot;Start date&quot; },
								{ title: &quot;Salary&quot; }
							]
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