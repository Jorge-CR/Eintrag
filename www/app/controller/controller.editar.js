angular.module('Eintrag').controller('editarController', ['$scope', 'editarService', '$sessionStorage', '$location', '$route', '$timeout', function ($scope, editarUsuario, $sessionStorage, $location, $route, $timeout) {

        $scope.edit = {};
       
            $scope.edit.id = $sessionStorage.datos.usu_id;
            $scope.edit.nombre = $sessionStorage.datos.usu_nombre;
            $scope.edit.cedula =  parseInt($sessionStorage.datos.usu_cedula);
            $scope.edit.direccion =$sessionStorage.datos.usu_direccion;
            $scope.edit.telfijo = $sessionStorage.datos.usu_telfijo;
            $scope.edit.celular = parseInt($sessionStorage.datos.usu_celular);
            $scope.edit.correo = $sessionStorage.datos.usu_correo;
            $scope.edit.rolid = $sessionStorage.datos.rol_id;
   
        $scope.submitEditarContacto = function () {
            editarUsuario.editarUsuario($scope.edit).then(function successCallback(response) {
                $scope.UsuarioEditado = false;
                $scope.edit = {};
                if (response.data.code == 500) {
                } else {
                    $scope.UsuarioEditado = true;
                    $scope.edit = '';
                    $timeout(function () {
                        // $route.reload();
                        window.location.reload();
                        $location.path('/AgUsuario');
                    }, 1000);
                }
            }, function errorCallback(response) {
                console.error(response);
            });
        };
    }]);



