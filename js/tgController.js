var app = angular.module('target', []);

app.controller('main', ['$scope', function($scope){
	$scope.img = "img/tg.svg"
	
	$scope.trocarImg = function(){
		var num = Math.round(Math.random()*10);
		
		if(num!=0){
			$scope
		}
	}
		$scope.rodar = function(){setInterval($scope.randonico(),200)}
		$scope.roda = setInterval(alert("!"),2000)
		$scope.randonico = function(){
		var num = Math.round(Math.random()*10);
		for(i=0;i<=7;i++){
			var num = Math.round(Math.random()*10);
			
			
		}

		alert (num)
		
	}
}])