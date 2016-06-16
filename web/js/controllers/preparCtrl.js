// PREPAR CONTROLLER
function preparCtrl($scope, $http, preparService) {
	$scope.title = "preparer";

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
	load();
}
