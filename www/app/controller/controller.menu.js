angular.module('Eintrag').controller('MenuController', ['$scope', '$sessionStorage', 'rolAdmin', 'rolInvitado', function ($scope, $sessionStorage, rolAdmin, rolInvitado) {
        $scope.rol = $sessionStorage.usuario.rol_id;
        $scope.rolAdmin = rolAdmin;
        $scope.rolInvitado = rolInvitado;
        $scope.CerrarSession = false;
        $scope.submit = function () {

            security.validateUserAndPassword($scope.datos).then(function successCallback(response) {
                console.log(response);
                $scope.CerrarSession = false;
                if (response.data.codigo == 500) {
                    $scope.CerrarSession = true;
                    $scope.datos = {};
                } else {
                    $sessionStorage.usuario = response.data.usuario[0];
                    $location.path('/');
//                  
                }
            }, function errorCallback(response) {
                console.error(response);
            });
        };
    }]);


