@extends('layout.webstart')

@section('content')
    <div id="page-title">
        <h1 class="page-header text-overflow">DigiCampuz Webstart</h1>

        <!--Searchbox-->
        <div class="searchbox">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Zoeken...">
            <span class="input-group-btn">
                <button class="text-muted" type="button"><i class="icon-search_1"></i></button>
            </span>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-title">Home</div>

                    <div class="panel-body">
                        <ol>
                            <li>Laatste Sync</li>
                            <li>Statistieken, hoeveel gebruikers/data/printers</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
