angular.module('Eintrag').service('AgUsService', ['$http', function ($http) {

        this.guardarUsuario = function (data) {
//            console.log(data);
            return $http.post('http://localhost/Eintrag/www/server.php/guardarUsuario', $.param(data));

        };
        
        this.cargarTabla = $http.get('http://localhost/Eintrag/www/server.php/cargarTabla');
        
    }]);



