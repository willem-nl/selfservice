angular
    .module('dataModule', ['treeControl'], function ($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })

    .controller('dataCtrl', function ($scope, $http){

        $scope.locaties = [
            { ID: 'EH', Name: 'Elsenhof',   Code: '055', Lokalen:[{ Name:'E01'},{ Name:'E02'},{ Name:'E03'},{ Name:'E04'},{ Name:'E05'},{ Name:'E06'},{ Name:'E07'},{ Name:'E08'}] },
            { ID: 'SH', Name: 'Stuifhoek',  Code: '056', Lokalen:[{ Name:'S01'},{ Name:'S02'},{ Name:'S03'},{ Name:'S04'},{ Name:'S05'},{ Name:'S06'},{ Name:'S07'},{ Name:'S08'}] },
            { ID: 'DD', Name: 'Den Duin',   Code: '057', Lokalen:[{ Name:'D01'},{ Name:'D02'},{ Name:'D03'},{ Name:'D04'},{ Name:'D05'},{ Name:'D06'},{ Name:'D07'},{ Name:'D08'}] },
            { ID: 'LW', Name: 'Lage Weide', Code: '058', Lokalen:[{ Name:'L01'},{ Name:'L02'},{ Name:'L03'},{ Name:'L04'},{ Name:'L05'},{ Name:'L06'},{ Name:'L07'},{ Name:'L08'}] },
            { ID: 'ZW', Name: 'Zeggewijzer',Code: '059', Lokalen:[{ Name:'Z01'},{ Name:'Z02'},{ Name:'Z03'},{ Name:'Z04'},{ Name:'Z05'},{ Name:'Z06'},{ Name:'Z07'},{ Name:'Z08'}] },
            { ID: 'ZZ', Name: 'Zonzeel',    Code: '060', Lokalen:[{ Name:'Z01'},{ Name:'Z02'},{ Name:'Z03'},{ Name:'Z04'},{ Name:'Z05'},{ Name:'Z06'},{ Name:'Z07'},{ Name:'Z08'}] }
        ];

        $scope.locatieOpties = {
            nodeChildren: 'Lokalen',
            dirSelectable: false,
            injectClasses:{
                iExpanded: "icon-home",
                iCollapsed: "icon-home",
                iLeaf: "icon-workplace"
            }
        };

        $scope.printers = [
            { Name: 'P055001' , Description: 'Elsenhof Lokaal E01', Type: 'Canon P100CN'},
            { Name: 'P055002' , Description: 'Elsenhof Lokaal E03', Type: 'Canon P110CN'},
            { Name: 'P055003' , Description: 'Elsenhof Lokaal E05', Type: 'HP Laserjet C1110'},
            { Name: 'P055004' , Description: 'Elsenhof Lokaal E08', Type: 'Ricoh P110CN'},
            { Name: 'P056001' , Description: 'Stuifhoek Administratie', Type: 'Canon P100CN'},
            { Name: 'P056002' , Description: 'Stuifhoek Lokaal S02', Type: 'Ricoh P110CN'},
            { Name: 'P056003' , Description: 'Stuifhoek Lokaal S08', Type: 'Canon P100CN'},
            { Name: 'P057001' , Description: 'Den Duin Lokaal D03', Type: 'HP Laserjet C1110'},
            { Name: 'P057002' , Description: 'Den Duin OLC', Type: 'HP Laserjet C1110'},
            { Name: 'P058001' , Description: 'Lage Weide Lokaal L02', Type: 'Canon P100CN'},
            { Name: 'P058002' , Description: 'Lage Weide Lokaal L04', Type: 'Canon P100CN'},
            { Name: 'P058003' , Description: 'Lage Weide Gang', Type: 'Canon P100CN'},
            { Name: 'P058004' , Description: 'Lage Weide OLC', Type: 'HP Laserjet C1110'},
            { Name: 'P059001' , Description: 'Zeggewijzer Lokaal Z01', Type: 'Ricoh P110CN'},
            { Name: 'P059002' , Description: 'Zeggewijzer Lokaal Z04', Type: 'HP Laserjet C1110'},
            { Name: 'P059003' , Description: 'Zeggewijzer Administratie', Type: 'Canon P100CN'},
            { Name: 'P059004' , Description: 'Zeggewijzer Lokaal E07', Type: 'HP Laserjet C1110'},
            { Name: 'P060001' , Description: 'Zonzeel Lokaal Z01', Type: 'Ricoh P110CN'},
            { Name: 'P060002' , Description: 'Zonzeel Lokaal Z03', Type: 'Canon P100CN'}
        ]

    });


