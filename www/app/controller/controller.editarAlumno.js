angular.module('Eintrag').controller('editarAlumnoController', ['$scope', 'editarAlumnoService', '$sessionStorage', '$location', '$route', '$timeout', function ($scope, editarAlumno, $sessionStorage, $location, $route, $timeout) {

        $scope.editarA = {};

        $scope.editarA.id = $sessionStorage.datos.per_id;
        $scope.editarA.nombre = $sessionStorage.datos.per_nombre;
        $scope.editarA.celular = parseInt($sessionStorage.datos.per_celular);
        $scope.editarA.apellidos = $sessionStorage.datos.per_apellidos;
        $scope.editarA.correo = $sessionStorage.datos.per_correo;
        $scope.editarA.cedula = parseInt($sessionStorage.datos.per_cedula);
        $scope.editarA.rh = $sessionStorage.datos.per_rh;
        $scope.editarA.genero = $sessionStorage.datos.per_genero;
        $scope.editarA.grado= $sessionStorage.datos.per_grado;
        $scope.editarA.direccion = $sessionStorage.datos.per_direccion;
        $scope.editarA.acudiente= $sessionStorage.datos.per_acudiente;
        $scope.editarA.telfijo = parseInt ($sessionStorage.datos.per_telfijo);
        $scope.editarA.celacu = parseInt($sessionStorage.datos.per_celacu);
        
        console.log($scope.editarA);

        $scope.submitEditarAlumno = function () {
            editarAlumno.editarAlumno($scope.editarA).then(function successCallback(response) {
                $scope.AlumnoEditado = false;
                $scope.editarA = {};
                if (response.data.code == 500) {
                } else {
                    $scope.AlumnoEditado = true;
                    $scope.editarA = '';
                    $timeout(function () {
                        // $route.reload();
                        window.location.reload();
                        $location.path('/registroAlumno');
                    }, 1000);
                }
            }, function errorCallback(response) {
                console.error(response);
            });
        };
    }]);



