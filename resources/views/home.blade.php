@extends('layout.main')

@section('content')
<div id="page-title">
    <h1 class="page-header text-overflow">Dashboard</h1>

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
</ol>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
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
