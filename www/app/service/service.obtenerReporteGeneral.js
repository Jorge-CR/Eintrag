    angular.module('Eintrag').service('ReporteGeneralService', ['$http', function($http){
    
    this.RepGeneral = function (data) {
      return $http.post('http://localhost/Eintrag/www/server.php/obtenerRepGeneral', $.param(data));
    };
    
}]);