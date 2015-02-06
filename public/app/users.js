angular
    .module('userModule', ['angularUtils.directives.dirPagination'], function ($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
    .config(function(paginationTemplateProvider){
        paginationTemplateProvider.setPath('/app/resources/paginationTemplate.tpl.html');
    })
    .controller('userCtrl', function ($scope, $http){
        $http.get('/app/resources/gebruikers.json')
            .success(function (data, status, headers, config) {
                $scope.items = data;
            })
            .error(function (data, status, headers, config) {
               console.log(status);
            });
    });


