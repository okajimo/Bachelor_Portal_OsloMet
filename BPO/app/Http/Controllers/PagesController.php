<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Index";
        return view('pages.Index')->with('title', $title);
    }

    public function grupper(){
        $title = "Grupper";
        return view('pages.grupper')->with('title', $title);
    }

    public function informasjon(){
        $title = "Informasjon";
        return view('pages.informasjon')->with('title', $title);
    }

    public function kontakt_info(){
        $title = "Kontakt Info";
        return view('pages.kontakt_info')->with('title', $title);
    }

    public function prosjektforslag(){
        $title = "Prosjektforslag";
        return view('pages.prosjektforslag')->with('title', $title);
    }

    public function tidligere_prosjekter(){
        $title = "Tidligere Prosjekter";
        return view('pages.tidligere_prosjekter')->with('title', $title);
    }

    public function studenter(){
        $title = "Studenter";
        return view('pages.studenter')->with('title', $title);
    }

    public function statusrapport(){
        $title = "Statusrapport";
        return view('pages.statusrapport')->with('title', $title);
    }
    
    public function dokumentasjon(){
        $title = "Dokumentasjon";
        return view('pages.dokumentasjon')->with('title', $title);
    }
    
    public function prosjektskisse(){
        $title = "Prosjektskisse";
        return view('pages.prosjektskisse')->with('title', $title);
    }

    public function veiledning(){
        $title = "Veiledning";
        return view('pages.veiledning')->with('title', $title);
    }

    public function forprosjekt(){
        $title = "Forprosjekt";
        return view('pages.forprosjekt')->with('title', $title);
    }

    public function prosjektrapport(){
        $title = "Prosjektrapport";
        return view('pages.prosjektrapport')->with('title', $title);
    }

    public function evaluering(){
        $title = "Evaluering";
        return view('pages.evaluering')->with('title', $title);
    }
}
