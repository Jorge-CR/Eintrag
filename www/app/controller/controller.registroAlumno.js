angular.module('Eintrag').controller('registroAlumnoController', ['$scope', 'registroAlumnoService', '$sessionStorage', '$location', 'rolAdmin', '$route', '$timeout', function ($scope, agregarAlumno, $sessionStorage, $location, rolAdmin, $route, $timeout) {

        $scope.dataRegistrarAlumno = {

            nombre: '',
            apellidos: '',
            cedula: '',
            genero: '',
            direccion: '',
            telfijo: '',
            celular: '',
            correo: '',
            rh: '',
            grado: '',
            acudiente: '',
            celacu: ''
           
        };
       cargarTabla();
        $scope.alumnoGuardado = false;


$scope.guardarA = function () {
            agregarAlumno.agregarAlu($scope.dataRegistrarAlumno).then(function successCallback(response) {
                $scope.alumnoGuardado = false;
                $scope.dataRegistrarUsuario = {};
                if (response.data.code == 500) {
                } else {
                    $scope.datos = {};
                    $scope.alumnoGuardado = true;
                    $scope.dataRegistrarAlumno = '';
                     console.log(response);
                     $scope.tabla = response.data.datos;
                      $timeout(function () {
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
             function cargarTabla() {
            agregarAlumno.cargarTabla.then(function successCallback(respTabla) {
                console.log(respTabla);
                $scope.tabla = respTabla.data.alumnos;
            }, function errorCallback(respTabla) {
                console.log(respTabla);
            });
        }
        $scope.eliminar = function (dato) {
            $('#eliminarAlumno').modal('toggle');
            $scope.nombre = dato.per_nombre;
            $scope.ideliminar = dato.per_id;
        };
        $scope.submitEliminarAlumno = function () {
            agregarAlumno.eliminarAlumno({id: $scope.ideliminar}).then(function successCallback(response) {
                $scope.alumnoEliminado = false;
                if (response.data.codigo == 500) {
                } else {
                    $scope.alumnoEliminado = true;
                    $timeout(function () {
                        $('#eliminarAlumno').modal('toggle');
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
        $scope.editar2 = function (x) {
            $sessionStorage.datos = x;
            $location.path('/EditarAlumno');

        };
        
    }]);
    