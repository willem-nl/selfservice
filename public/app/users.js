angular
    .module('userModule', [], function ($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })

    .filter('offset', function (){
      return function (input, start) {
          start = parseInt(start, 10);
          return input.slice(start);
      };
    })
    .controller('userCtrl', function ($scope, $http) {
        $http.get('app/resources/gebruikers.json')
            .success(function (data, status, headers, config) {
                $scope.items = data;
            })
            .error(function (data, status, headers, config) {
                console.log(status);
            });
    })
    .controller("PaginationCtrl", function($scope) {
        $scope.itemsPerPage = 5;
        $scope.currentPage = 0;
        $scope.items = [];

        for (var i=0; i<50; i++) {
            $scope.items.push({
                SamAccountName: i, DisplayName: "name "+ i, Manual: "description " + i
            });
        }

        $scope.prevPage = function() {
            if ($scope.currentPage > 0) {
                $scope.currentPage--;
            }
        };

        $scope.prevPageDisabled = function() {
            return $scope.currentPage === 0 ? "disabled" : "";
        };

        $scope.pageCount = function() {
            return Math.ceil($scope.items.length/$scope.itemsPerPage)-1;
        };

        $scope.nextPage = function() {
            if ($scope.currentPage < $scope.pageCount()) {
                $scope.currentPage++;
            }
        };

        $scope.nextPageDisabled = function() {
            return $scope.currentPage === $scope.pageCount() ? "disabled" : "";
        };

    });
