angular.module('Eintrag').service('editarService', ['$http', function ($http) {

         this.editarUsuario = function (data) {
            return $http.post('http://localhost/Eintrag/www/server.php/editarUsuario', $.param(data));
        };
    }]);


