'use strict';

angular.module('terentoApp', [])
	.config(function ($routeProvider) {
		$routeProvider
			.when('/', {
				templateUrl: 'partials/landing.html',
				controller: 'MainCtrl'
			})
			.otherwise({
				redirectTo: '/'
			});
	});
