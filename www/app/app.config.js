angular.module('Eintrag').config(['$routeProvider',
    function config($routeProvider) {
        $routeProvider.
                when('/', {
                    controller: 'loginController',
                    templateUrl: 'app/template/login.html'
                }).
                when('/MenuPrincipal', {
                    controller: 'MenuController',
                    templateUrl: 'app/template/MenuPrincipal.html'
                }).
                when('/AgUsuario', {
                    controller: 'AgUsController',
                    templateUrl: 'app/template/AgUsuario.html'
                }).
                when('/copyrigth', {
                    controller: 'CopyController',
                    templateUrl: 'app/template/copyrigth.html'
                }).
                when('/registroAlumno', {
                    controller: 'registroAlumnoController',
                    templateUrl: 'app/template/registroAlumno.html'
                }).
                when('/controlEntrada', {
                    controller: 'controlEntradaController',
                    templateUrl: 'app/template/controlEntrada.html'
                }).
                when('/reportes', {
                    controller: 'reportesController',
                    templateUrl: 'app/template/reportes.html'
                }).
                when('/reporteGeneral', {
                    controller: 'reporteGeneralController',
                    templateUrl: 'app/template/reporteGeneral.html'
                }).
                when('/reporteAlumno', {
                    controller: 'reporteAlumnoController',
                    templateUrl: 'app/template/reporteAlumno.html'
                }).
                when('/reporteFecha', {
                    controller: 'reporteFechaController',
                    templateUrl: 'app/template/reporteFecha.html'
                }).
                        
                otherwise('/');
    }]);


