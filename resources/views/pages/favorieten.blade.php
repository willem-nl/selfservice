@extends('layout.main')

@section('content')
<div id="page-title">
    <h1 class="page-header text-overflow">DigiCampuz WebStart</h1>

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
    <li><a href="#">Favorietenbeheer</a></li>
</ol>

<div class="page-content">
    <div class="row">
        <div class="col-md-9">
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

                </div>
                <div class="panel-footer">Panel footer</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-primary">

                <!--Panel heading-->
                <div class="panel-heading">
                    <div class="panel-control">

                        <!--Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#demo-tabs-box-1">First Tab</a>
                            </li>
                            <li><a data-toggle="tab" href="#demo-tabs-box-2">Second Tab</a>
                            </li>
                        </ul>

                    </div>
                    <h3 class="panel-title">With tabs</h3>
                </div>

                <!--Panel body-->
                <div class="panel-body">

                    <!--Tabs content-->
                    <div class="tab-content">
                        <div id="demo-tabs-box-1" class="tab-pane fade in active">
                            <h4 class="text-thin">First Tab Content</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                        <div id="demo-tabs-box-2" class="tab-pane fade">
                            <h4 class="text-thin">Second Tab Content</h4>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('pageJS')
	<script src="app/users.js"></script>
@endsection