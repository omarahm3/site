angular.module("levariApp")
.controller('mainController', function($scope){
	$scope.message = 'Whatever';
})
.directive("navBar", function(){
	return {
		templateUrl: 'Views/header.template.html'
	};
});
