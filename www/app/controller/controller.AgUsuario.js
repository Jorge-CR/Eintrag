angular.module('Eintrag').controller('AgUsController', ['$scope', 'AgUsService', '$sessionStorage', '$location', '$route', function ($scope, AgUsService, $sessionStorage, $location, $route) {

        $scope.datos = {};
        $scope.usuarioGuardado = false;
        $scope.guardar = function () {
            AgUsService.guardarUsuario($scope.datos).then(function successCallback(answer) {
//                console.log(answer);

                $scope.usuarioRegistrado = false;
                if (answer.data.codigo == 500) {

                } else {
                    $scope.datos = {};
                    $scope.usuarioGuardado = true;
                    console.log(answer);
                    $scope.tabla = answer.data.datos;
                    console.log("INSERTO");

                }

            }, function errorCallback(answer) {
//                console.log(answer);
            });
        };

//        function cargarTabla() {
//            AgUsService.cargarTabla.then(function successCallback(respTabla) {
//                console.log(respTabla);
//                $scope.tabla = respTabla.data.usuario;
//            }, function errorCallback(respTabla) {
//                console.log(respTabla);
//            });
//        }

    }]);