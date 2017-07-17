angular.module('Eintrag').controller('reportesController', ['$scope', '$sessionStorage', '$location',  function ($scope, $sessionStorage, $location) {

    
    
    $scope.RepGeneral={};

    $scope.reporteGeneral = function () {
      $sessionStorage.reporte;
      $location.path("/reporteGeneral");
    };
}]);


