@extends('layout.main')

@section('content')
<div id="page-title">
    <h1 class="page-header text-overflow">Printerbeheer  <a class="btn btn-default pull-right mar-rgt" href="/webstart">Genereer INI</a></h1>
</div>

<ol class="breadcrumb">
    <li><a href="#">Start</a></li>
    <li><a href="#">Printerbeheer</a></li>
</ol>

<div class="page-content" ng-app="printerModule">
    <div class="row">
        <div class="col-md-5">
            <div class="panel" ng-controller="locationCtrl">
                <div class="panel-heading">
                    <div class="panel-control">
                        <button class="btn btn-default btn-active-pink dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                            Filter <i class="icon-filter"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header">Filter op:</li>
                            <li><a href="#">Locatie...</a>
                                <ul class="dropdown-menu">
                                    <li ng-repeat="locatie in locations"><% locatie %></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <h3 class="panel-title">Lokalen</h3>
                </div>
                <div class="panel-body">
                    <treecontrol class="tree-locations" tree-model="locaties" options="locatieOpties"><% node.Name %></treecontrol>
                </div>
                <div class="panel-footer">Panel footer</div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel" ng-controller="printerCtrl">
                <div class="panel-title">Printers</div>
                <div class="panel-body">
                </div>
                <div class="panel-footer">Panel footer</div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('pageJS')
    <script src="/app/printers.js"></script>
@endsection