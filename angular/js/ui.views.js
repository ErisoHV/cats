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
                        templateUrl : 'components/headerMenu.html'
                    },
                    'sidebar-menu': {
                        templateUrl : 'components/sidebarMenu.html'
                    },
                    'header-info': {
                       templateUrl : 'components/leftHeader.html'
                    },
                    'footer': {
                       templateUrl : 'components/footer.html'
                    }
                }
            });
    }]);