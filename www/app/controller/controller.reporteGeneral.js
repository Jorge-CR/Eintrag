angular.module('Eintrag').controller('reporteGeneralController', ['$scope', '$sessionStorage', 'ReporteGeneralService', '$timeout', '$location', function ($scope, $sessionStorage, agregarReportes, $timeout, location) {
        $scope.reportes = [];
        $scope.pintarTabla = function () {
            agregarReportes.RepGeneral.then(function successCallback(response) {
                console.log(response);
                switch (response.data.code) {
                    case 200:
                        $scope.reportes = response.data.datos;
                        break;
                    case 500:
                        $scope.reportes = [];
                }

            });
        };
//
        $scope.pintarTabla();
    }]);

