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
                <div class="panel-title">Favorieten</div>
                <div class="panel-body">
                    <div class="pad-ver">
                        <label class="form-radio form-normal form-primary"><input type="radio" name="favo-target" checked>Per School</label></li>
                        <label class="form-radio form-normal form-primary"><input type="radio" name="favo-target" >Per Groep</label></li>
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
                                <td><input type="text" class="form-control" disabled="disabled" placeholder="<% locatie.ID %>"></td>
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