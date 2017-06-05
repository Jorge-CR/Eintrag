angular.module('Eintrag').service('AgUsService', ['$http', function ($http) {

        this.guardarUsuario = function (data) {
//            console.log(data);
            return $http.post('http://localhost/Eintrag/www/server.php/guardarUsuario', $.param(data));

        };

        this.eliminarUsuario = function (data) {
            return $http.post('http://localhost/Eintrag/www/server.php/eliminarUsuario', $.param(data));
        };

        this.editarUsu = function (data) {
            return $http.post('http://localhost/Eintrag/www/server.php/editarUsuario', $.param(data));
        };


        this.cargarTabla = $http.get('http://localhost/Eintrag/www/server.php/cargarTabla');


    }]);



