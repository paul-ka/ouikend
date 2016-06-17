// PREPAR CONTROLLER
function preparCtrl($scope, $rootScope, $http, friendService) {
	$scope.title = "preparer";
	$scope.panelAmi = false;
	$scope.paneltrip = false;
	$scope.colorP="{'btn btn-success':true}";
	$scope.colorV="{'btn btn-default':true}";
	$rootScope.colorV="btn-default";
	$rootScope.colorP="btn-success";


	function load(){
		friendService.get().then(function(res){
			$scope.prepars = res.data;
		});
	}
	$scope.add = function(){
		var data = {};
		data.description = $scope.description;
		friendService.create(data).then(function(res){
			load();
		});
		$scope.description = "";
	}
	$scope.update = function(friend){
		friendService.update(friend._id, friend).then(function(res){
			load();
		});
	}
	$scope.delete = function(friend){
		friendService.delete(friend._id).then(function(res){
			load();
		});
	}
	$scope.btnAmi = function(){
		$scope.panelAmi = !$scope.panelAmi;
		if ($scope.panelAmi){$scope.panelTrip = false;}
	}
	$scope.btnTrip = function(){
		$scope.panelTrip = !$scope.panelTrip;
		if ($scope.panelTrip){$scope.panelAmi = false;}
	}
	load();
}
