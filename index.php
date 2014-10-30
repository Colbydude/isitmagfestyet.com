<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Is It MAGFest Yet?</title>
		<meta name="description" content="Is It MAGFest Yet? The answer to the question everyone wants to know.">
		<meta name="keywords" content="is, it, MAG, mag, magfest, MAGFest, yet, please, Music and Gaming Festival">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="http://isitmagfestyet.com" rel="canonical">
		<link href="/css/app.min.css" rel="stylesheet">
		<link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-44795853-1', 'isitmagfestyet.com');
			ga('send', 'pageview');
		</script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="text-center">
		<div class="offset"></div>
		<div class="container home">
			<?php
				if (date('Ymd', strtotime("2015-01-23")) == date('Ymd') || date('Ymd', strtotime("2015-01-24")) == date('Ymd') || date('Ymd', strtotime("2015-01-25")) == date('Ymd') || date('Ymd', strtotime("2015-01-26")) == date('Ymd'))
					echo '<h1 class="yes">YES</h1>';
				else if (date('Ymd', strtotime("2015-01-22")) == date('Ymd'))
					echo '<h1 class="almost">ALMOST</h1>';
				else if (date('Ymd', strtotime("2015-01-27")) == date('Ymd'))
					echo '<h1 class="just-missed-it">JUST MISSED IT</h1>';
				else
					echo '<h1 class="no">NO</h1>';
			?>
			<audio id="audio">
				<source src="/audio/colossus.mp3" type="audio/mpeg">
				<source src="/audio/colossus.ogg" type="audio/ogg">
				<embed height="0" width="0" src="audio/colossus.mp3">
			</audio>
		</div>
		<footer>
			<p class="magfest-logo"><a href="http://magfest.org/" target="_blank"><img class="img-responsive" style="margin: 0 auto;" src="/img/magfest-logo.png" alt="MAGFest"></a></p>
		</footer>
		<!-- Javascript -->
		<script src="/js/app.min.js"></script>
	</body>
</html>