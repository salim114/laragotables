<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('images/laragotables.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<title>DataTables feature - Non-jQuery initialisation</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables feature <span>Non-jQuery initialisation</span></h1>
			<div class="info">
				<p>As of v1.11, DataTables can be initialised without using jQuery through the <code>new DataTable()</code> constructor. This class takes two parameters:</p>
				<ul class="markdown">
					<li>A <a href="https://developer.mozilla.org/en-US/docs/Web/API/DOMString">DOMString selector</a> or HTML elements to pick the table(s) from the DOM.
					</li>
					<li>An object of <a href="https://datatables.net/reference/option/">DataTables options</a>.
					</li>
				</ul>
				<p>The constructor will return a <a href="https://datatables.net/reference/api/">DataTables API instance</a> allowing manipulation of the table.</p>
				<p>Please note that while this constrctor does not require you to write any jQuery code, DataTables will still use jQuery as a dependency.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features') }}">Non-jQuery initialisation</a></h3>
						<ul class="toc">
							<li>
		                        <a href="{{ url('features/non_jquery/init') }}">Non-jQuery initialisation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/options') }}">Options</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dt_events') }}">DataTables events</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/dom_events') }}">DOM events</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/non_jquery/ajax') }}">Ajax data source (objects)</a>
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