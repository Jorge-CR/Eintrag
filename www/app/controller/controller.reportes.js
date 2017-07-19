angular.module('Eintrag').controller('reportesController', ['$scope', '$sessionStorage', '$location','$timeout', function ($scope, $sessionStorage, $location,$timeout) {



        $scope.RepGeneral = {};

        $scope.reporteGeneral = function () {
            $sessionStorage.reporte;
            $location.path("/reporteGeneral");
            $timeout(function () {
            }, 700);
            $timeout(function () {
                // $route.reload();
                window.location.reload();
            }, 1000);
        };
    }]);


