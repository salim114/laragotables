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
	<title>DataTables extensions - ColReorder</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables extensions <span>ColReorder</span></h1>
			<div class="info">
				<p>ColReorder adds the ability for the end user to be able to reorder columns in a DataTable through a click and drag operation. This can be useful when presenting data in a table, letting the user move columns that they wish to compare next to each other for easier comparison.

				It is worth noting that the underlying column data structure of the DataTable is modified as part of this process - this is important if you are interacting with the table using the API.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features/non_jquery') }}"><i class="fa fa-arrow-circle-right"></i> ColReorder</a></h3>
		                <h3 class="tx">Initialisation and options</h3>
		                <ul class="toc">
							<li>
		                        <a href="{{ url('features/non_jquery/init') }}">Basic initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Scrolling table</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Predefined column ordering</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Realtime updating</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Individual column filtering</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Initialisation using `new`</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Enable / disable API</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Reset ordering API</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/options') }}">Footer callback</a>
		                    </li>							
		                    <h3 class="tx">Integration with other DataTables extensions</h3>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Column visibility integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">FixedColumns integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">FixedHeader integration</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Responsive integration</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">Server-side processing</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">State saving</a>
		                    </li>
		                    <h3 class="tx">Styling</h3>
							<li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Alternative insert</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 3</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 4</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bootstrap 5</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Foundation</a>
		                    </li>		                    
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Bulma</a>
		                    </li>
		                    <li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">jQuery UI</a>
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