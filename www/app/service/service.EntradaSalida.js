    angular.module('Eintrag').service('EntradaSalidaService', ['$http', function($http){
    
    this.Entrada = function (data) {
      return $http.post('http://localhost/Eintrag/www/server.php/EntradaSalida', $.param(data));
    };
    
}]);
