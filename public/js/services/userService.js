'use strict';

mainApp.factory('User', ['$http', function($http) {
	var urlBase = '/api/user';

    return {
    	get : function(){
    		return $http.get(urlBase);

    	},

    	getUser : function(id){
    		return $http.get(urlBase + '/' + id);
    	}
    }

}]);
