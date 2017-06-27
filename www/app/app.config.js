/**
 * variables constante que diferencian los roles
 */
angular.module('Eintrag').constant('rolAdmin', 1);
angular.module('Eintrag').constant('rolInvitado', 2);

///**
// * middleware que comprueba las session y los tipos de roles
// */
angular.module('Eintrag').config(['$middlewareProvider',
    function middlewareProviderConfig($middlewareProvider) {
        $middlewareProvider.map({
            'comprobarSession': ['$localStorage', '$sessionStorage', function comprobarSession($localStorage, $sessionStorage) {
                    middlewareComprobarSession(this, $localStorage, $sessionStorage);
                }],
            'comprobarPermisoDeAdmnistracion': ['$sessionStorage', 'rolAdmin', function comprobarPermisoDeAdmnistracion($sessionStorage, rolAdmin) {
                    middlewareComprobarPermisoDeAdmnistracion(this, $sessionStorage, rolAdmin);
                }],
            'comprobarPermisoDeInvidado': ['$localStorage', '$sessionStorage', 'rolInvitado', function comprobarPermisoDeInvitado($localStorage, $sessionStorage, rolInvitado) {
                    middlewareComprobarPermisoDeCelador(this, $localStorage, $sessionStorage, rolCelador);
                }],
            'comprobarNoTenerSesion': ['$sessionStorage', 'rolAdmin', function comprobarPermisoDeCelador($sessionStorage, rolAdmin) {
                    middlewareComprobarNoTenerSesion(this, $sessionStorage, rolAdmin);
                }]
        });
    }]);


/**
 * configurador de enrutamiento
 */
angular.module('Eintrag').config(['$routeProvider', '$httpProvider', function config($routeProvider, $httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
        $routeProvider.
                when('/', {
                    controller: 'loginController',
                    templateUrl: 'app/template/login.html',
                    middleware: ['comprobarNoTenerSesion']
                }).
                when('/MenuPrincipal', {
                    controller: 'MenuController',
                    templateUrl: 'app/template/MenuPrincipal.html',
                    middleware: ['comprobarSession']
                }).
                when('/AgUsuario', {
                    controller: 'AgUsController',
                    templateUrl: 'app/template/AgUsuario.html',
                    middleware: ['comprobarSession', 'comprobarPermisoDeAdmnistracion']
                }).
                when('/copyrigth', {
                    controller: 'CopyController',
                    templateUrl: 'app/template/copyrigth.html',
                    middleware: ['comprobarSession']
                }).
                when('/registroAlumno', {
                    controller: 'registroAlumnoController',
                    templateUrl: 'app/template/registroAlumno.html',
                    middleware: ['comprobarSession']
                }).
                when('/EditarUsuario', {
                    controller: 'editarController',
                    templateUrl: 'app/template/EditarUsuario.html',
                    middleware: ['comprobarSession']
                }).
                when('/EditarAlumno', {
                    controller: 'editarAlumnoController',
                    templateUrl: 'app/template/EditarAlumno.html',
                    middleware: ['comprobarSession']
                }).
                when('/controlEntrada', {
                    controller: 'controlEntradaController',
                    templateUrl: 'app/template/controlEntrada.html',
                    middleware: ['comprobarSession']
                }).
                when('/reportes', {
                    controller: 'reportesController',
                    templateUrl: 'app/template/reportes.html',
                    middleware: ['comprobarSession', 'comprobarPermisoDeAdmnistracion']
                }).
                when('/reporteGeneral', {
                    controller: 'reporteGeneralController',
                    templateUrl: 'app/template/reporteGeneral.html',
                    middleware: ['comprobarSession', 'comprobarPermisoDeAdmnistracion']
                }).
                when('/reporteAlumno', {
                    controller: 'reporteAlumnoController',
                    templateUrl: 'app/template/reporteAlumno.html',
                    middleware: ['comprobarSession', 'comprobarPermisoDeAdmnistracion']
                }).
                when('/reporteFecha', {
                    controller: 'reporteFechaController',
                    templateUrl: 'app/template/reporteFecha.html',
                    middleware: ['comprobarSession', 'comprobarPermisoDeAdmnistracion']
                }).
                when('/logout', {
                    controller: 'logoutController',
                    template: '<p>Cerrando Session...</p>',
                    middleware: ['comprobarSession']
                }).
                otherwise('/');
    }]);


