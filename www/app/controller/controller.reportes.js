angular.module('Eintrag').controller('reportesController', ['$scope', '$sessionStorage', '$location', function ($scope, $sessionStorage, $location) {


        $scope.RepGeneral = {};

        $scope.reporteGeneral = function () {
            console.log('error');
            $sessionStorage.reporte;
            $location.path("/reporteGeneral");
        };
    }]);



