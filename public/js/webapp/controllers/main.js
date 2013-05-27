'use strict';

angular.module('terentoApp')
  .controller('MainCtrl', function ($scope) {
    $scope.selection;
    $scope.states = [
				{
				"name": "typeahead.js",
				"description": "A fast and fully-featured autocomplete library",
				"language": "JavaScript",
				"value": "typeahead.js",
				"tokens": [
				"typeahead.js",
				"JavaScript"
				]
				},
				{
				"name": "cassandra",
				"description": "A Ruby client for the Cassandra distributed database",
				"language": "Ruby",
				"value": "cassandra",
				"tokens": [
				"cassandra",
				"Ruby"
				]
				},
				{
				"name": "hadoop-lzo",
				"description": "Refactored version of code.google.com/hadoop-gpl-compression for hadoop 0.20",
				"language": "Shell",
				"value": "hadoop-lzo",
				"tokens": [
				"hadoop",
				"lzo",
				"Shell",
				"hadoop-lzo"
				]
				}
	];

  });
