angular.module('Eintrag').controller('AgUsController', ['$scope', 'AgUsService', '$sessionStorage', '$location', '$route', '$timeout', function ($scope, guardarUsuario, $sessionStorage, $location, $route, $timeout) {

        $scope.dataRegistrarUsuario = {
            nombre: '',
            cedula: '',
            direccion: '',
            telefono: '',
            celular: '',
            correo: '',
            contrasena: '',
            rol: ''
        };
        cargarTabla();
        $scope.usuarioGuardado = false;
   

//      $scope.datos = {};

        $scope.guardar = function () {
            guardarUsuario.guardarUsuario($scope.dataRegistrarUsuario).then(function successCallback(answer) {
                $scope.usuarioGuardado = false;
                $scope.dataRegistrarUsuario = {};
                if (answer.data.codigo == 500) {

                } else {
                    $scope.datos = {};
                    $scope.usuarioGuardado = true;
                    $scope.dataRegistrarUsuario = '';
                    console.log(answer);
                    $scope.tabla = answer.data.datos;
//                    console.log("INSERTO");

                }


            }, function errorCallback(answer) {
            });
        };
        function cargarTabla() {
            guardarUsuario.cargarTabla.then(function successCallback(respTabla) {
                console.log(respTabla);
                $scope.tabla = respTabla.data.usuario;
            }, function errorCallback(respTabla) {
                console.log(respTabla);
            });
        }
      
              $scope.eliminar = function (dato) {
            $('#eliminarUsuario').modal('toggle');
            $scope.nombre = dato.usu_nombre;
            $scope.ideliminar = dato.usu_id;
        };

        $scope.submitEliminarUsuario = function () {
            guardarUsuario.eliminarUsuario({id: $scope.ideliminar}).then(function successCallback(response) {
                $scope.usuarioEliminado = false;
                if (response.data.codigo == 500) {
                } else {
                    $scope.usuarioEliminado = true;
                    $timeout(function () {
                        $('#eliminarUsuario').modal('toggle');
                    }, 700);
                    $timeout(function () {
                        // $route.reload();
                        window.location.reload();
                    }, 1000);
                }
            }, function errorCallback(response) {
                console.error(response);
            });
        };
        $scope.editar = function (x) {
            $sessionStorage.datos = x;
            $location.path('/EditarUsuario');

        };

    }]);
