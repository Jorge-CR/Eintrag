angular.module('Eintrag').service('editarAlumnoService', ['$http', function ($http) {

         this.editarAlumno = function (data) {
            return $http.post('http://localhost/Eintrag/www/server.php/editarAlumno', $.param(data));
        };
    }]);