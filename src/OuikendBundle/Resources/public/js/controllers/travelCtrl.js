// TRAVEL CONTROLLER
function travelCtrl($scope, $rootScope, $http, travelService, activityService, friendService) {
	$scope.title = "Voyager";
	$scope.paneltrip = false;
	$scope.panelActivity = false;
	$scope.panelPot = false;
	$rootScope.colorP="btn-default";
	$rootScope.colorV="btn-success";
	$scope.mapage=0;

	function load(){
		travelService.get().then(function(res){
			$scope.travels = res.data;
		});
		activityService.get().then(function(res){
			$scope.activitys = res.data;
		});
		friendService.get().then(function(res){
			$scope.friends = res.data;
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
	$scope.tview = function(t){
		$scope.mapage=1;
		$scope.selt = t;
	}
	$scope.aview = function(a){
		$scope.mapage=2;
		$scope.sela = a;
	}
	$scope.vok = function(vote){console.log(vote);return Number(vote)+1;}
	load();

}
