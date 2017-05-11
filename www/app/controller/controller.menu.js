angular.module('Eintrag').controller('MenuController', ['$scope', 'MenuService', function ($scope, Me) {
                $scope.Imagen = null;
                $scope.Texto1 = null;
                $scope.Texto2 = null;
                $scope.Texto3 = null;


//                $scope.personas = null;

                Me.getMyindex.then(function successCallback(response) {
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


