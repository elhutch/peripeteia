var app = angular.module('peri', ['ngRoute']);

app.config(function($routeProvider) {
   $routeProvider
      .when('/', {
         templateUrl : 'app/components/home/home.php',
         controller  : 'HomeController'
      });
});