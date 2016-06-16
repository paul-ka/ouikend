function inscriptionController($scope, $window, inscriptionService) {
    $scope.test = 'ça marche !';

    function load() {
        inscriptionService.findAll().then(function (res) {
            $scope.users = res.data;
        })
    }
load();
    $scope.valider = function () {
        console.log($scope.test);
        var data = {};
        data.nom = $scope.nom;
        data.prenom = $scope.prenom;
        inscriptionService.ajouter(data).then(function(){
            $scope.nom="";
            $scope.prenom="";
            load();
        });
    }
    $scope.update = function (user){
        inscriptionService.update(user._id, user);
    }
}