angular.module('app.routes', [])

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider
    

      .state('aPPLICATIONS', {
    url: '/page4',
    templateUrl: 'templates/aPPLICATIONS.html',
    controller: 'aPPLICATIONSCtrl'
  })

  .state('eNTERPRISEAPPLICATIONS', {
    url: '/page5',
    templateUrl: 'templates/eNTERPRISEAPPLICATIONS.html',
    controller: 'eNTERPRISEAPPLICATIONSCtrl'
  })

  .state('pERSONALAPPLICATION', {
    url: '/page6',
    templateUrl: 'templates/pERSONALAPPLICATION.html',
    controller: 'pERSONALAPPLICATIONCtrl'
  })

  .state('page', {
    url: '/page7',
    templateUrl: 'templates/page.html',
    controller: 'pageCtrl'
  })

  .state('display', {
    url: '/page8',
    templateUrl: 'templates/display.html',
    controller: 'displayCtrl'
  })

$urlRouterProvider.otherwise('/page4')


});