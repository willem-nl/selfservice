@extends('layout.main')

@section('content')
<div id="page-title">
    <h1 class="page-header text-overflow">Applicaties</h1>

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
    <li><a href="#">Applicaties</a></li>
</ol>

<div class="container">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-title">Applicaties</div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">Panel footer</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pageJS')
@endsection