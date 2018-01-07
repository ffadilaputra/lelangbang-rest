var App = angular.module('App', []);

App.controller('Contact', ($scope ,$http ) => {
    $http.get('http://localhost/belajar-ci-res/contact')
        .then((res) => {
          $scope.items = res.data;
        })
})
