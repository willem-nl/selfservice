angular
    .module('webstartModule', ['angularUtils.directives.dirPagination','angularModalService','ngAnimate','selectionModel','gg.editableText'], function ($interpolateProvider) {
        $interpolateProvider.startSymbol('{{');
        $interpolateProvider.endSymbol('}}');
    })
    .config(function(paginationTemplateProvider){
        paginationTemplateProvider.setPath('/app/resources/paginationTemplate.tpl.html');
    })
    .controller('categoryCtrl', ['$scope', '$http', 'ModalService', function ($scope, $http, ModalService){

        $scope.addCategory = null;

        $scope.selectedItems = [];
        $scope.loadWebstartItems = function(category){

        };

        // Get all browsers.
        $scope.Init = function(){
            $http.get('/webstart/categories')
                .success(function (data, status, headers, config) {
                    $scope.categories = data;
                })
                .error(function (data, status, headers, config) {
                    console.log(status);
                });
        };

        $scope.addCategory = function(){
            $http({
                method: "POST",
                url: "/webstart/categories",
                data: {name: $scope.categoryName}
            })
                .then(function(){
                    $scope.Init();
                });
        };

        $scope.deleteCategory = function(categoryID){
            $http({
                method: "DELETE",
                url: "/webstart/categories/" + categoryID
            })
                .then(function(){
                    $scope.Init();
                });
        };

        $scope.addCategoryModal = function(){
            ModalService.showModal({
                templateUrl: "/app/templates/webstart-add-category.tpl.html",
                controller: "categoryController"
            }).then(function(modal) {
                modal.element.modal('show');
                modal.close.then(function(result) {
                    console.log(result);
                });
            }).catch(function(error) {
                // error contains a detailed error message.
                console.log(error);
            });
        };
    }])
    .controller('categoryController', ['$scope', 'close', '$http', function($scope, close, $http) {
        $scope.close = function(result) {
            close(result, 500); // close, but give 500ms for bootstrap to animate
        };
    }]);


