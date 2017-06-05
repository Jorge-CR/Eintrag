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
        $scope.usuarios = [];
        $scope.edit = {};

        $scope.pintarTabla = function () {
            guardarUsuario.cargarTabla.then(function successCallback(response) {
                switch (response.data.code) {
                    case 200:
                        $scope.usuarios = response.data.datos;
                        break;
                    case 500:
                        $scope.usuarios = [];
                }
            });
        };

        $scope.datos = {};

        $scope.guardar = function () {
            guardarUsuario.guardarUsuario($scope.dataRegistrarUsuario).then(function successCallback(answer) {
//                console.log(answer);

                $scope.usuarioGuardado = false;
                $scope.dataRegistrarUsuario = {};
                if (answer.data.codigo == 500) {

                } else {
                    $scope.datos = {};
                    $scope.usuarioGuardado = true;
                    $scope.dataRegistrarUsuario = '';
                    console.log(answer);
                    $scope.tabla = answer.data.datos;
                    console.log("INSERTO");

                }


            }, function errorCallback(answer) {
//                console.log(answer);
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

//        $scope.editar = function (dato) {
//            $scope.edit.id = dato.usu_id;
//            $scope.edit.nombre = dato.usu_nombre;
//            $scope.edit.cedula = dato.usu_cedula;
//            $scope.edit.direccion = dato.usu_direccion;
//            $scope.edit.telefono = dato.usu_telfijo;
//            $scope.edit.celular = dato.usu_celular;
//            $scope.edit.correo = dato.usu_correo;
//            $scope.edit.contrasena = dato.usu_contrasena;
//            $scope.edit.rolid = dato.rol_id;
//
//            $('#editarUsuario').modal('toggle');
//        };
//
//        $scope.submitEditarUsuario = function () {
//            guardarUsuario.editarUsu($scope.edit).then(function successCallback(response) {
//                $scope.usuarioEditado = false;
//                $scope.edit = {};
//                if (response.data.code == 500) {
//                } else {
//                    $scope.usuarioEditado = true;
//                    $scope.edit = '';
//                    $timeout(function () {
//                        $('#editarUsuario').modal('toggle');
//                    }, 700);
//                    $timeout(function () {
//                        // $route.reload();
//                        //window.location.reload();
//                    }, 1000);
//                }
//            }, function errorCallback(response) {
//                console.error(response);
//            });
//        };


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

    }]);
