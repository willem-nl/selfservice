@extends('layout.mainwithaside')

@section('content')
<div ng-app="userModule" ng-controller="userCtrl">
    <div id="page-title">
        <h1 class="page-header text-overflow">Gebruikers</h1>

        <!--Searchbox-->
        <div class="searchbox">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Zoeken..." ng-model="query">
                <span class="input-group-btn">
                    <button class="text-muted" type="button"><i class="icon-search_1"></i></button>
                </span>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Loginnaam</th>
                                    <th>Naam</th>
                                    <th>Emailadres</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr dir-paginate="item in filteredItems = (items | filter:query | orderBy: 'SamAccountName') | itemsPerPage:12" >
                                    <td>
                                        <i class="icon-shuffle_2" ng-if="item.Manual == 0" title="Gesynchroniseerde gebruiker"></i>
                                        <i class="icon-pencil_1" ng-if="item.Manual == 1" title="Handmatig aangemaakte gebruiker"></i>
                                    </td>
                                    <td><% item.SamAccountName %></td>
                                    <td><% item.DisplayName %></td>
                                    <td><% item.Mail %></td>
                                    <td>Action</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pad-all">
                        <dir-pagination-controls></dir-pagination-controls>
                        <div class="footer-text text-right">
                            <span ng-if="items.length == filteredItems.length">Totaal <% items.length %> gebruikers</span>
                            <span ng-if="items.length != filteredItems.length">Er worden <% filteredItems.length %> van de <% items.length %> gebruikers getoond.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('aside')
<!--ASIDE-->
<!--===================================================-->
<aside id="aside-container">
    <div id="aside">
        <div class="nano">
            <div class="nano-content">
                <div class="pad-all">
                    <h5 class="text-uppercase">Acties</h5>
                    <div class="list-group bg-trans">
                        <div class="list-group-item">Gebruiker toevoegen</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!--===================================================-->
<!--END ASIDE-->
@endsection

@section('pageJS')
	<script src="/app/users.js"></script>
@endsection