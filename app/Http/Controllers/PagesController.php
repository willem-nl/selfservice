<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    public function gebruikers(){
        return view('pages.gebruikers');
    }

    public function groepen(){
        return view('pages.groepen');
    }

    public function applicaties(){
        return view('pages.applicaties');
    }

    public function groepsschijf(){
        return view('pages.groepsschijf');
    }

    public function printers(){
        return view('pages.printers');
    }

    public function rollen(){
        return view('pages.rollen');
    }

    public function software(){
        return view('pages.software');
    }

    public function favorieten(){
        return view('pages.favorieten');
    }

    public function instellingen(){
        return view('pages.klantinstellingen');
    }


}
