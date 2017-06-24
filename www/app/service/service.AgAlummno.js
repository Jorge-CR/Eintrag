    angular.module('Eintrag').service('registroAlumnoService', ['$http', function($http){
    
    this.agregarAlu = function (data) {
      return $http.post('http://localhost/Eintrag/www/server.php/agregarAlumno', $.param(data));
    };
     this.eliminarAlumno = function (data) {
            return $http.post('http://localhost/Eintrag/www/server.php/eliminarAlumno', $.param(data));
        };
    this.cargarTabla = $http.get('http://localhost/Eintrag/www/server.php/cargarTablaAlumno');
}]);
 


