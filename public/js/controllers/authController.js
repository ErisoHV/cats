cats.controller('AuthController', ['$scope', 'AuthService', 
    function($scope ,AuthService) {

        $scope.login = function() {
              AuthService.login(this.auth.username, this.auth.password);
        };

        $scope.logout = function() {
            AuthService.logout();
        };
        
}]);