/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

cats.factory('AuthService', ['$auth', '$state','$http', 
    function($auth, $state, $http){
    var vm = this;
    
    return {
        login: function(username, password) {

            var credentials = {
                userName: username,
                password: password
            };
            
            // Use Satellizer's $auth service to login
            $auth.login(credentials).then(function() {

                // Return an $http request for the now authenticated
                // user so that we can flatten the promise chain
                return $http.get('api/authenticate/user');

            // Handle errors
            }, function(error) {
                vm.loginError = true;
                vm.loginErrorText = error.data.error;

            // Because we returned the $http.get request in the $auth.login
            // promise, we can chain the next promise to the end here
            }).then(function(response) {
                //TODO Manage invalid_credentials here

                // Stringify the returned data to prepare it
                // to go into local storage
                var user = JSON.stringify(response.data.user);
                sessionStorage.setItem('user', user);
                
                // The user's authenticated state gets flipped to
                // true so we can now show parts of the UI that rely
                // on the user being logged in
                sessionStorage.setItem('authenticated', true);

                // Everything worked out so we can now redirect to
                // the users state to view the data
                $state.go('dashboard');
            });
        },
        
        logout: function() {

            $auth.logout().then(function() {

                // Remove the authenticated user from local storage
                sessionStorage.removeItem('user');

                // Flip authenticated to false so that we no longer
                // show UI elements dependant on the user being logged in
                sessionStorage.setItem('authenticated', false);
                $state.go('auth');
            });
        }
    };
}]);


