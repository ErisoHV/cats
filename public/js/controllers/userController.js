'use strict';

mainApp.controller('userController', ['$scope', '$http','User', function($scope, $http, User) {
            $scope.users = [];
            $scope.user = null;
            
            $scope.getUsers = function (){
            	 User.get().success(function(data){
            		$scope.users = data;
            	})
            }


            $scope.getUser = function (id){
            	User.getUser(id).success(function(data){
            		$scope.user = data;
            	})
            };
}]);
