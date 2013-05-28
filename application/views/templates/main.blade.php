<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Te Rento</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<!-- build:css styles/main.css -->
	{{ HTML::style('css/bootstrap.css') }}     
	{{ HTML::style('css/main.css') }}       

	<!-- endbuild -->
  </head>
  <body ng-app="terentoApp">
	<!--[if lt IE 7]>
	  <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->

	<!--[if lt IE 9]>
		{{ HTML::script('js/lib/es5-shim.js'); }}
		{{ HTML::script('js/lib/json3.min.js'); }}
	<![endif]-->
	
	@include('sections.header')

	@if (isset($isLanding))
	<div class="container" ng-view></div>
	@else
	<div class="container">
		@yield('content')
	</div>
	@endif


	@include('scripts') 


	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
  </body>
</html>
