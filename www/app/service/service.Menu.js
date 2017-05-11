angular.module('Eintrag').service('MenuService', ['$http', function($http) {
        this.getMyindex = $http.get('http://localhost/Eintrag/Server/Menu.php');

       
       
//        this.getMyInfo = $http.get('http://10.72.138.122/miApp2/server/index.php');
    }]);

