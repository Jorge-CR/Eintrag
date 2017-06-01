angular.module('Eintrag').controller('registroAlumnoController', ['$scope', 'registroAlumnoService', '$sessionStorage', '$location', 'rolAdmin', '$route', '$timeout', function ($scope, agregarAlumno, $sessionStorage, $location, rolAdmin, $route, $timeout) {

        $scope.dataRegistrarAlumno = {

            nombre: '',
            apellido: '',
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


$scope.submit = function () {
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
        
    }]);
    