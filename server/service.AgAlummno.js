    angular.module('Eintrag').service('registroAlumnoService', ['$http', function($http){
    
    this.agregarAlu = function (data) {
      return $http.post('http://localhost/Eintrag/www/server.php/agregarAlumno', $.param(data));
    };
    
}]);
 


