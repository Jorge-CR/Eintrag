angular.module('Eintrag').controller('CopyController', ['$scope', 'CopyService', function ($scope, Cor) {
        $scope.Imagen = null;
         $scope.Imagen1 = null;
        $scope.Texto1 = null;
        $scope.Texto2 = null;
        $scope.Texto3 = null;
        $scope.Texto4 = null;
        $scope.Texto5 = null;
        $scope.Texto6 = null;
        $scope.Texto7 = null;
        $scope.Texto8 = null;
        $scope.Texto9 = null;
        $scope.Texto10 = null;
        $scope.Texto11 = null;



//                $scope.personas = null;

        Cor.getMyindex.then(function successCallback(response) {
//                    console.log(response.data);
//                    $scope.personas = response.data;
            $scope.Imagen = response.data.Imagen;
            $scope.Imagen1 = response.data.Imagen1;
            $scope.Texto1 = response.data.Texto1;
            $scope.Texto2 = response.data.Texto2;
            $scope.Texto3 = response.data.Texto3;
            $scope.Texto4 = response.data.Texto4;
            $scope.Texto5 = response.data.Texto5;
            $scope.Texto6 = response.data.Texto6;
            $scope.Texto7 = response.data.Texto7;
            $scope.Texto8 = response.data.Texto8;
            $scope.Texto9 = response.data.Texto9;
            $scope.Texto10 = response.data.Texto10;
            $scope.Texto11 = response.data.Texto11;


        }, function errorCallback(response) {
            console.log(response);
        });
    }]);
