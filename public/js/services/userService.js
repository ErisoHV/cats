'use strict';

/**
 * User factory to the cats Laravel User model
 * @type type
 */
cats.factory('User', ['$http', function($http) {
	var urlBase = userRoute;

    return {
    	get : function(){
    		return $http.get(urlBase);

    	},

    	getUser : function(id){
    		return $http.get(urlBase + '/' + id);
    	}
    }

}]);
