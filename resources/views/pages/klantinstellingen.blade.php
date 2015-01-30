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
                    Hoe worden favorieten bestuurd voor deze klant?
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
            <div class="panel">
                <div class="panel-title">Instellingen</div>
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