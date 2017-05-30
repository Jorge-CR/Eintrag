angular.module('Eintrag').controller('MenuController', ['$scope', '$sessionStorage', 'rolAdmin', 'rolInvitado', function ($scope, $sessionStorage, rolAdmin, rolInvitado) {
        $scope.rol = $sessionStorage.usuario.rol_id;
        $scope.rolAdmin = rolAdmin;
        $scope.rolInvitado = rolInvitado;
    }]);


