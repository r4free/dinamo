var myApp = angular.module('freeze',[])
myApp.controller('main', ['$scope', function($scope){

	$scope.menu = ['home','produtos','about','contacts']
	$scope.menuLinks = [
		'index.php',
		'produtos.php',
		'about.php',
		'contacts.php'
	]
}])