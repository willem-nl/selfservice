@extends('layout.main')

@section('content')
<div id="page-title">
    <h1 class="page-header text-overflow">Groepen</h1>

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
    <li><a href="#">Groepen</a></li>
</ol>

<div class="page-content">
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-title">Groepen</div>
                <div class="panel-body">
                </div>
                <div class="panel-footer">Panel footer</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-title">Gebruikers</div>
                <div class="panel-body">
                </div>
                <div class="panel-footer">Panel footer</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pageJS')
@endsection