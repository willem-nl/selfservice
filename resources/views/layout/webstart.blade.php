<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Selfservice - Case Study</title>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,500" rel="stylesheet" type="text/css">

	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/font-awesome.css" rel="stylesheet">
	<link href="/css/webstart.css" rel="stylesheet">
	<script src="/js/pace.js"></script>
</head>

<body class="metro">
<div class="tile-area tile-area-dark">
	<h1 class="tile-area-title fg-white">DigiCampuz WebStart</h1>

	<div class="tile-group one">
		<div class="tile-group-title">Office</div>
		<a class="tile half bg-darkBlue" data-click="transform">
			<div class="tile-content icon">
				<img src="images/word.png">
			</div>
		</a>
		<a class="tile half bg-darkGreen" data-click="transform">
			<div class="tile-content icon">
				<img src="images/excel.png">
			</div>
		</a>
		<a class="tile half bg-darkPink" data-click="transform">
			<div class="tile-content icon">
				<img src="images/onenote.png">
			</div>
		</a>
		<a class="tile half bg-orange" data-click="transform">
			<div class="tile-content icon">
				<img src="images/powerpoint.png">
			</div>
		</a>
		<a class="tile half bg-lightBlue" data-click="transform">
			<div class="tile-content icon">
				<img src="images/outlook.png">
			</div>
		</a>
		<a class="tile half bg-darkRed" data-click="transform">
			<div class="tile-content icon">
				<img src="images/access.png">
			</div>
		</a>
	</div> <!-- End tile group -->

	<div class="tile-group double">
		<div class="tile-group-title">Games</div>
		<div class="tile bg-dark" data-click="transform">
			<div class="tile-content icon">
				<img src="images/Crysis-2-icon.png">
			</div>
			<div class="brand">
				<div class="label">Crysis 2</div>
			</div>
		</div>
		<div class="tile bg-dark" data-click="transform">
			<div class="tile-content icon">
				<img src="images/Battlefield_4_Icon.png">
			</div>
			<div class="brand">
				<div class="label">Battlefield 4</div>
			</div>
		</div>
		<div class="tile bg-dark" data-click="transform">
			<div class="tile-content icon">
				<img src="images/D3.png">
			</div>
			<div class="brand">
				<div class="label">Diablo III</div>
			</div>
		</div>
		<div class="tile bg-dark" data-click="transform">
			<div class="tile-content icon">
				<img src="images/grid2.png">
			</div>
			<div class="brand">
				<div class="label">Grid 2</div>
			</div>
		</div>
	</div> <!-- End group -->

	<div class="tile-group double">
		<div class="tile double" data-click="transform">
			<div class="tile-content image-set">
				<img src="images/1.jpg">
				<img src="images/2.jpg">
				<img src="images/3.jpg">
				<img src="images/4.jpg">
				<img src="images/5.jpg">
			</div>
		</div>
		<div class="tile double live" data-role="live-tile" data-effect="slideUpDown" data-click="transform">
			<div class="tile-content image">
				<img src="images/1.jpg">
			</div>
			<div class="tile-content image">
				<img src="images/2.jpg">
			</div>
			<div class="tile-content image">
				<img src="images/3.jpg">
			</div>
			<div class="tile-content image">
				<img src="images/4.jpg">
			</div>
			<div class="tile-content image">
				<img src="images/5.jpg">
			</div>

			<div class="tile-status">
				<span class="label">Images</span>
			</div>
		</div>
	</div>
</div>


<script src="/js/angular.js"></script>
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/nifty.js"></script>
    @yield('pageJS')
</body>
</html>
