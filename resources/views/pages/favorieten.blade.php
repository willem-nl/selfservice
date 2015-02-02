@extends('layout.main')

@section('content')
<div id="page-title">
    <h1 class="page-header text-overflow">DigiCampuz WebStart <a class="btn btn-purple text-right" href="/webstart">Demo!</a></h1>
</div>

<ol class="breadcrumb">
    <li><a href="#">Start</a></li>
    <li><a href="#">Favorietenbeheer</a></li>
</ol>

<div class="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tab-base">

                <!--Nav Tabs-->
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#demo-lft-tab-1">Voorbeeld</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#demo-lft-tab-2">Categorieen</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#demo-lft-tab-3">Setting</a>
                    </li>
                </ul>

                <!--Tabs Content-->
                <div class="tab-content">
                    <div id="demo-lft-tab-1" class="tab-pane fade active in">
                        <h4 class="text-thin">First Tab Content</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                    <div id="demo-lft-tab-2" class="tab-pane fade">
                        <h4 class="text-thin">Second Tab Content</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                    <div id="demo-lft-tab-3" class="tab-pane fade">
                        <h4 class="text-thin">Third Tab Content</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
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