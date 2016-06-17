function config($routeProvider) {
	$routeProvider
        .when('/home', {
			templateUrl: 'views/home.html',
		})
		.when('/', {
			templateUrl: 'views/dashboard.html',
			controller: 'dashboardController'
		})
		.when('/form', {
			templateUrl: 'views/form.html',
            controller: 'connexionController'
		})
        .when('/inscription', {
			templateUrl: 'views/inscription.html',
            controller: 'inscriptionController'
		})
        .when('/about', {
			templateUrl: 'views/about.html',
        })
		.otherwise({
			redirectTo: '/'
		});
}
function run($rootScope, $location){
	var path = function() { return $location.path(); };
	$rootScope.$watch(path, function(newVal, oldVal){
		$rootScope.activetab = newVal;
	});
}
angular.module('app', ['ngRoute'])
    .config(config)
    .controller('dashboardController', dashboardController)
    .controller('connexionController', connexionController)
    .controller('inscriptionController', inscriptionController)
    .service('dashboardService', dashboardService)
    .service('connexionService', connexionService)
    .service('inscriptionService', inscriptionService)
    /*.factory('', )*/
    .run(run);

