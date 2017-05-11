angular.module('Eintrag').controller('AgUsController', ['$scope', 'AgUsService', function ($scope, log) {
        $scope.Imagen = null;
        $scope.Texto1 = null;
        $scope.Texto2 = null;
        $scope.Texto3 = null;
        $scope.Texto4 = null;
        $scope.Texto5 = null;
        $scope.Texto6 = null;
        $scope.Texto7 = null;
        $scope.Texto8 = null;
        $scope.Texto9 = null;



//                $scope.personas = null;

        log.getMyindex.then(function successCallback(response) {
//                    console.log(response.data);
//                    $scope.personas = response.data;
            $scope.Imagen = response.data.Imagen;
            $scope.Texto1 = response.data.Texto1;
            $scope.Texto2 = response.data.Texto2;
            $scope.Texto3 = response.data.Texto3;
            $scope.Texto4 = response.data.Texto4;
            $scope.Texto5 = response.data.Texto5;
            $scope.Texto6 = response.data.Texto6;
            $scope.Texto7 = response.data.Texto7;
            $scope.Texto8 = response.data.Texto8;
            $scope.Texto9 = response.data.Texto9;


        }, function errorCallback(response) {
            console.log(response);
        });
    }]);