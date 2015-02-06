angular
    .module('printerModule', ['treeControl'], function ($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })

    .controller('printerCtrl', function ($scope, $http){
        $http.get('/app/resources/printers.json')
            .success(function (data, status, headers, config) {
                $scope.printers = data;
            })
            .error(function (data, status, headers, config) {
                console.log(status);
            });
    })
    .controller('locationCtrl', function ($scope, $http){
        $http.get('/app/resources/ou.json')
            .success(function (data, status, headers, config) {
                var output = [];
                for (var i = 0; i < data.length; i++) {
                    var chain = (data[i].CanonicalName).split("/");
                    var currentNode = output;
                    for (var j = 0; j < chain.length; j++) {
                        var wantedNode = chain[j];
                        var lastNode = currentNode;
                        for (var k = 0; k < currentNode.length; k++) {
                            if (currentNode[k].name == wantedNode) {
                                currentNode = currentNode[k].children;
                                break;
                            }
                        }
                        // If we couldn't find an item in this list of children
                        // that has the right name, create one:
                        if (lastNode == currentNode) {
                            var newNode = currentNode[k] = {name: wantedNode, children: []};
                            currentNode = newNode.children;
                        }
                    }
                }

                $scope.locations = output;
            })
            .error(function (data, status, headers, config) {
                console.log(status);
            });




    });



