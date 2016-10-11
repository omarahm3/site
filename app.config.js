var app = angular.module("levariApp", ['ngRoute']);

app.config(function($routeProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'Views/home.template.html',
		controller: 'mainController'
	})

	.when('/about', {
		template: '<h1>About page</h1>',
		controller: 'mainController'
	})

	.when('/contact', {
		template: '<h1>Contact us page</h1>',
		controller: 'mainController'
	});
});