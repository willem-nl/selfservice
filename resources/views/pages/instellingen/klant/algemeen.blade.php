@extends('layout.main')

@section('content')
    <div id="page-title">
        <h1 class="page-header text-overflow">Instellingen</h1>
    </div>

    <ol class="breadcrumb">
        <li><a href="#">Start</a></li>
        <li><a href="#">Instellingen</a></li>
    </ol>

    <div class="page-content">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-title">Modules</div>
                    <div class="panel-body">
                        De volgende modules zijn voor deze klant ingeschakeld:
                        <div class="pad-ver">
                            <form class="form-block" action="post">
                                <label class="form-checkbox form-normal form-primary active" for="">
                                    <input type="checkbox" checked/>Gebruikersbeheer
                                </label>
                                <label class="form-checkbox form-normal form-primary active" for="">
                                    <input type="checkbox" checked/>Favorietenbeheer
                                </label>
                                <label class="form-checkbox form-normal form-primary active" for="">
                                    <input type="checkbox" checked/>Applicatiebeheer
                                </label>
                                <label class="form-checkbox form-normal form-primary active" for="">
                                    <input type="checkbox" checked/>Opslagbeheer
                                </label>
                                <label class="form-checkbox form-normal form-primary active" for="">
                                    <input type="checkbox" checked/>Printerbeheer
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-primary" disabled="disabled">Opslaan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel" ng-app="dataModule" ng-controller="dataCtrl">
                    <div class="panel-title">Lokaties</div>
                    <div class="pad-hor">
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="20%">Lokatiecode</th>
                                <th>Lokatienaam</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="locatie in locaties">
                                <td><input type="text" class="form-control" disabled="disabled"
                                           placeholder="<% locatie.ID %>"></td>
                                <td><input type="text" class="form-control" placeholder="<% locatie.Name %>"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-primary" disabled="disabled">Opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pageJS')
    <script src="/app/data.js"></script>
@endsection