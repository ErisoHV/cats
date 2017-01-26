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
