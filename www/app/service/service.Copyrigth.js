angular.module('Eintrag').service('CopyService', ['$http', function($http) {
        this.getMyindex = $http.get('http://localhost/Eintrag/server/Copyrigth.php');

       
       
//        this.getMyInfo = $http.get('http://10.72.138.122/miApp2/server/index.php');
    }]);
