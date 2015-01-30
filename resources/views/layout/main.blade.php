<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Selfservice - Case Study</title>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,500" rel="stylesheet" type="text/css">

	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/selfservice.css" rel="stylesheet">
	<script src="js/pace.js"></script>
</head>

<body>
	<div id="container" class="effect mainnav-lg mainnav-fixed">

        @include('navigation.top')

		<div class="boxed">
			<div id="content-container">
                @yield('content')
			</div>

            @include('navigation.sidebar')

		</div>

		<footer id="footer">
            <div class="hide-fixed pull-right pad-rgt">BETA v0.2</div>
			<p class="pad-lft">Selfservice Elements &#0169; 2015 IT-Workz</p>
		</footer>

		<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>

	</div>

	<script src="js/angular.js"></script>
	<script src="js/angular-utils-pagination.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/nifty.js"></script>
    @yield('pageJS')
</body>
</html>
