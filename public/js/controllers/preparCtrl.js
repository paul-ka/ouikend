// PREPAR CONTROLLER
function preparCtrl($scope, $rootScope, $http, preparService) {
	$scope.title = "preparer";
	$scope.panelAmi = false;
	$scope.paneltrip = false;
	$scope.colorP="{'btn btn-success':true}";
	$scope.colorV="{'btn btn-default':true}";
	$rootScope.colorV="btn-default";
	$rootScope.colorP="btn-success";


	function load(){
		preparService.get().then(function(res){
			$scope.prepars = res.data;
		});
	}
	$scope.add = function(){
		var data = {};
		data.description = $scope.description;
		preparService.create(data).then(function(res){
			load();
		});
		$scope.description = "";
	}
	$scope.update = function(prepar){
		preparService.update(prepar._id, prepar).then(function(res){
			load();
		});
	}
	$scope.delete = function(prepar){
		preparService.delete(prepar._id).then(function(res){
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
