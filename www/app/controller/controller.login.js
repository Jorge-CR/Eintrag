    angular.module('Eintrag').controller('loginController', ['$scope', 'securityService', '$sessionStorage', '$location', 'rolAdmin', function ($scope, security, $sessionStorage, $location, rolAdmin) {
        $scope.datos = {};
        $scope.usuarioErroneo = false;
        $scope.submit = function () {

//      $.ajax({
//        url: 'http://localhost/cras/www/server.php/login',
//        type: 'POST',
//        data: $scope.datos,
//        success: function (response) {
//          if (response.codigo == 500) {
//            $scope.$apply(function () {
//              $scope.usuarioErroneo = true;
//              $scope.datos = {};
//            });
//          } else {
//            $scope.$apply(function () {
//              $sessionStorage.usuario = response.usuario[0];
//              if ($sessionStorage.usuario.rol_id == rolAdmin) {
//                $location.path('/MenuPrincipal');
//              } else {
//                $location.path('/registroAlumno');
//              }
//            });
//          }
//        }
//      });

            security.validateUserAndPassword($scope.datos).then(function successCallback(response) {
                console.log(response);
                $scope.usuarioErroneo = false;
                if (response.data.codigo == 500) {
                    $scope.usuarioErroneo = true;
                    $scope.datos = {};
                } else {
                    $sessionStorage.usuario = response.data.usuario[0];
                    $location.path('/MenuPrincipal');
//                    if ($sessionStorage.usuario.rol_id == rolAdmin) {
//                        $location.path('/MenuPrincipal');
//                    } else {
//                        $location.path('/registroAlumno');
//                    }
                }
            }, function errorCallback(response) {
                console.error(response);
            });

        };
    }]);