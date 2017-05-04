angular.module('Eintrag').config(['$routeProvider',
    function config($routeProvider) {
        $routeProvider.
                when('/', {
                    controller: 'loginController',
                    templateUrl: 'app/template/login.html'
                }).
                otherwise('/');
    }]);


