    angular.module('Eintrag').service('ReporteGeneralService', ['$http', function($http){
    
    this.RepGeneral = function (data) {
      return $http.get('http://localhost/Eintrag/www/server.php/obtenerRepGeneral',$.param(data));
    };
    
    this.RepGeneral = $http.get('http://localhost/Eintrag/www/server.php/obtenerRepGeneral');
    
}]);