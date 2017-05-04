angular.module('Eintrag').controller('loginController', ['$scope', 'loginService', function ($scope, log) {
                $scope.Imagen = null;
                $scope.Texto1 = null;
                $scope.Texto2 = null;
                $scope.Texto3 = null;


//                $scope.personas = null;

                log.getMyindex.then(function successCallback(response) {
//                    console.log(response.data);
//                    $scope.personas = response.data;
                    $scope.Imagen = response.data.Imagen;
                    $scope.Texto1 = response.data.Texto1;
                    $scope.Texto2 = response.data.Texto2;
                    $scope.Texto3 = response.data.Texto3;


                }, function errorCallback(response) {
                    console.log(response);
                });
            }]);
