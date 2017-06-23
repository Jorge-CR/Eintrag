angular.module('Eintrag').controller('registroAlumnoController', ['$scope', 'registroAlumnoService', '$sessionStorage', '$location', 'rolAdmin', '$route', '$timeout', function ($scope, agregarAlumno, $sessionStorage, $location, rolAdmin, $route, $timeout) {

        $scope.dataRegistrarAlumno = {

            nombre: '',
            apellidos: '',
            cedula: '',
            genero: '',
            direccion: '',
            tel_fijo: '',
            celular: '',
            correo: '',
            rh: '',
            grado: '',
            nombre_acudiente: '',
            celular_acudiente: '',
            acciones: ''
        };
        cargarTabla();
        $scope.alumnoGuardado = false;


$scope.guardarA = function () {
            agregarAlumno.agregarAlu($scope.dataRegistrarAlumno).then(function successCallback(response) {
                $scope.alumnoRegistrado = false;
                $scope.dataRegistrarUsuario = {};
                if (response.data.code == 500) {
                } else {
                    $scope.alumnoRegistrado = true;
                    $scope.dataRegistrarAlumno = '';
                }
            }, function errorCallback(response) {
                console.error(response);
            });
        };
        
        $scope.submitEliminarAlumno = function () {
            guardarAlumno.eliminarAlumno({id: $scope.ideliminar}).then(function successCallback(response) {
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
        $scope.editar = function (x) {
            $sessionStorage.datos = x;
            $location.path('/EditarAlumno');

        };
        
    }]);
    