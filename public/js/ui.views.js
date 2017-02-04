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