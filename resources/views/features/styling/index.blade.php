<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/shCore.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/shCore.js') }}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('js/demo.js') }}"></script>
	<title>DataTables features - Styling</title>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Styling</span></h1>
			<div class="info">
				<p>When using DataTables, you want your tables to fit in with your site / app to make the end user experience as seamless as possible. For this reason, DataTables
				provides an easy to customise core stylesheet, which has a number of features that you can enable or disable as you required. Additionally there are a number of
				integration packages which can be used to fit DataTables into a site which uses some of the popular CSS libraries such as Twitter Bootstrap and Foundation. Or of
				course you can craft your own CSS to fit it into your site perfectly!</p>
				<p>This section includes features of how DataTables can be styled using these methods.</p>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<div class="toc">
					<div class="toc-group">
						<h3><a href="{{ url('features') }}">Styling</a></h3>
						<ul class="toc">
							<li>
		                        <a href="{{ url('features/styling/display') }}">Base style</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/no_classes') }}">Base style - no styling classes</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/cell_border') }}">Base style - cell borders</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/compact') }}">Base style - compact</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/hover') }}">Base style - hover</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/order_column') }}">Base style - order_column</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/row_border') }}">Base style - row borders</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/stripe') }}">Base style - stripe</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/bootstrap') }}">Bootstrap 3</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/bootstrap4') }}">Bootstrap 4</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/bootstrap5') }}">Bootstrap 5</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/foundation') }}">Foundation</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/semanticui') }}">Fomantic-UI (formally Semantic-UI)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/bulma') }}">Bulma</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/jqueryUI') }}">jQuery UI ThemeRoller</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/material') }}">Material Design (Tech. preview)</a>
		                    </li>
							<li>
		                        <a href="{{ url('features/styling/uikit') }}">UIKit 3 (Tech. preview)</a>
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