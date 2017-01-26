var cats = angular.module("catsApp", ['ui.router']);


'use strict';

/*angular.module('catsApp', ['ui.router'])*/
cats
.config(['$stateProvider', '$urlRouterProvider', 
    function($stateProvider, $urlRouterProvider) {
	$urlRouterProvider.otherwise('/');
        $stateProvider
            .state('dashboard', {
                url:'/',
                views: {
                    'header@': {
                        templateUrl : 'views/components/headerMenu.html'
                    },
                    'sidebar-menu': {
                        templateUrl : 'views/components/sidebarMenu.html'
                    },
                    'header-info': {
                       templateUrl : 'views/components/leftHeader.html'
                    },
                    'footer': {
                       templateUrl : 'views/components/footer.html'
                    }
                }
            });
    }]);
'use strict';

cats.factory('User', ['$http', function($http) {
	var urlBase = 'api/user';

    return {
    	get : function(){
    		return $http.get(urlBase);

    	},

    	getUser : function(id){
    		return $http.get(urlBase + '/' + id);
    	}
    }

}]);

'use strict';

cats.controller('userController', ['$scope', '$http','User', function($scope, $http, User) {
            $scope.users = [];
            $scope.user = null;
            
            $scope.getUsers = function (){
            	 User.get().then(function successCallback(response){
					$scope.user = response.data;
				}, function errorCallback(response){
					alert("Error")
				});
            };


            $scope.getUser = function (id){
            	User.getUser(id).then(function successCallback(response){
					$scope.user = response.data;
				}, function errorCallback(response){
					alert("Error")
				});
            };
}]);
