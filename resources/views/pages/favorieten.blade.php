@extends('layout.main')

@section('content')
<div id="page-title">
    <h1 class="page-header text-overflow">Favorieten</h1>

    <!--Searchbox-->
    <div class="searchbox">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search..">
            <span class="input-group-btn">
                <button class="text-muted" type="button"><i class="icon-search_1"></i></button>
            </span>
        </div>
    </div>
</div>

<ol class="breadcrumb">
    <li><a href="#">Start</a></li>
    <li><a href="#">Favorieten</a></li>
</ol>

<div class="container">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">

                    <div class="panel-heading">
                        <div class="panel-control">
                            <button class="demo-panel-ref-btn btn btn-default" data-target="#demo-panel-ref" data-toggle="panel-overlay">
                                <i class="fa fa-rotate-right fa-fw"></i> Refresh
                            </button>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="dropdown-toggle btn btn-info">
                                    <i class="fa fa-gear fa-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="panel-title">&nbsp;</div>
                    </div>
                    <div class="panel-body">
                        <div ng-app="userModule">
                            <div ng-controller="userController">
                                <table>
                                    <thead>
                                        <tr>
                                            <th ng-repeat="(key, val) in users[0]"><% key %></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="item in items | offset: currentPage*itemsPerPage | limitTo: itemsPerPage">
                                            <td ng-repeat="(key, val) in item ">Test<% val %></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <td colspan="3">
                                            <div class="pagination">
                                                <ul>
                                                    <li ng-class="prevPageDisabled()">
                                                        <a href ng-click="prevPage()">« Prev</a>
                                                    </li>
                                                    <li ng-repeat="n in range()" ng-class="{active: n == currentPage}" ng-click="setPage(n)">
                                                        <a href="#"><% n+1 %></a>
                                                    </li>
                                                    <li ng-class="nextPageDisabled()">
                                                        <a href ng-click="nextPage()">Next »</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">Panel footer</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pageJS')
	<script src="app/users.js"></script>
@endsection