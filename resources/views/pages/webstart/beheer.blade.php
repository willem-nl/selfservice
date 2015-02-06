@extends('layout.main')

@section('content')
<div id="page-title">
    <h1 class="page-header text-overflow">DigiCampuz WebStart <a class="btn btn-purple text-right" href="/webstart">Demo!</a></h1>
</div>

<ol class="breadcrumb">
    <li><a href="#">Start</a></li>
    <li><a href="#">Favorietenbeheer</a></li>
</ol>

<div class="page-content" ng-app="webstartModule">
    <div class="row">
        <div class="col-md-4">
            <div class="panel" ng-controller="categoryCtrl" ng-init="Init()">
                <div class="panel-heading">
                    <div class="panel-control"><a class="btn btn-purple" ng-click="showCategory=!showCategory">&#43;</a></div>
                    <h3 class="panel-title">Categorieën</h3>
                </div>
                <div class="panel-body">
                    <div class="mar-btm">
                        <span ng-hide="!categories.length">Selecteer een categorie of voeg een nieuwe toe:</span>
                        <span ng-show="!categories.length">Er zijn geen categorieën gevonden, druk op de knop "Toevoegen" om een categorie aan te maken.</span>

                    </div>
                    <form action="">
                        <ul class="list-group mar-no" ng-hide="!categories.length">
                            <li class="list-group-item mar-no pad-no bord-no" ng-show="showCategory">
                                <form ng-submit="addCategory()" class="form-horizontal">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Naam" ng-model="categoryName"/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning" type="submit">Toevoegen</button>
                                        </span>
                                    </div>
                                </form>
                            </li>
                            <li class="list-group-item" ng-repeat="category in categories"
                                selection-model
                                selection-model-selected-class="active"
                                selection-model-selected-items="selectedItems"
                                    selection-model-on-change="loadWebstartItems(category)">
                                <div class="pull-right btn-group bord-no" style="margin-top:-8px;" ng-show="category.selected">
                                    <a class="btn btn-icon bord-no" ng-click="editCategory(category.name)"><i class="icon-pencil_1"></i></a>
                                    <a class="btn btn-icon bord-no" ng-click="deleteCategory(category.id)"><i class="icon-delete2"></i></a>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-control"><button class="btn btn-primary">Toevoegen</button></div>
                    <h3 class="panel-title">Snelkoppelingen</h3>
                </div>
                <div class="panel-body">
                    <div ng-show="!categories.length">Er zijn geen snelkoppelingen gevonden, druk op de knop "Toevoegen" om een snelkoppelingen aan te maken.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pageJS')
	<script src="/app/webstart.js"></script>
@endsection