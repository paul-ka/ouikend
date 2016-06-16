// TRAVEL CONTROLLER
function travelCtrl($scope, $http, travelService) {
	$scope.title = "Voyager";
	$scope.paneltrip = false;
	$scope.panelActivity = false;
	$scope.panelPot = false;

	function load(){
		travelService.get().then(function(res){
			$scope.travels = res.data;
		});
	}
	$scope.add = function(){
		var data = {};
		data.description = $scope.description;
		travelService.create(data).then(function(res){
			load();
		});
		$scope.description = "";
	}
	$scope.update = function(travel){
		travelService.update(travel._id, travel).then(function(res){
			load();
		});
	}
	$scope.delete = function(travel){
		travelService.delete(travel._id).then(function(res){
			load();
		});
	}
	$scope.btnTrip = function(){
		$scope.panelTrip = !$scope.panelTrip;
		if ($scope.panelTrip){
			$scope.panelActivity = false;
			$scope.panelPot = false;}
	}
	$scope.btnActivity = function(){
		$scope.panelActivity = !$scope.panelActivity;
		if ($scope.panelActivity){
			$scope.panelTrip = false;
			$scope.panelPot = false;}
	}
	$scope.btnPot = function(){
		$scope.panelPot = !$scope.panelPot;
		if ($scope.panelPot){
			$scope.panelActivity = false;
			$scope.panelTrip = false;}
	}
	load();
}
