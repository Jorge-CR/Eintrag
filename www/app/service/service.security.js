angular.module('Eintrag').service('securityService', ['$http', function ($http) {

        this.validateUserAndPassword = function (data) {
            return $http.post('http://localhost/Eintrag/www/server.php/login', $.param(data));

        };
    }]);


