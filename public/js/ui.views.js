'use strict';

cats.config(['$stateProvider', '$urlRouterProvider', '$authProvider', 
    function($stateProvider, $urlRouterProvider, $authProvider) {
        // Satellizer configuration that specifies which API
        // route the JWT should be retrieved from
        $authProvider.loginUrl = authRoute;
        
	$urlRouterProvider.otherwise('/auth');
        $stateProvider
                .state('auth',{
                    url:'/auth',
                    templateUrl:loginRoute,
                    controller: 'AuthController as auth'
                })
                .state('dashboard', {
                    url:dashboardRoute,
                    controller: 'dashboardController as dashboard',
                    views: {
                        '': {
                            templateUrl:'views/dashboard.php'
                        },
                        'header@dashboard': {
                            templateUrl : 'views/components/dashboard/headerMenu.html'
                        },
                        'sidebar-menu@dashboard': {
                            templateUrl : 'views/components/dashboard/sidebarMenu.html'
                        },
                        'header-info@dashboard': {
                           templateUrl : 'views/components/dashboard/leftHeader.html'
                        },
                        'footer@dashboard': {
                           templateUrl : 'views/components/dashboard/footer.html'
                        }
                    }
            });
    }]);