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
        return view('pages.info.informasjon')->with('title', $title);
    }

    public function kontakt_info(){
        $title = "Kontakt Info";
        return view('pages.info.kontakt_info')->with('title', $title);
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
        return view('pages.info.studenter')->with('title', $title);
    }
    
    public function dokumentasjon(){
        $title = "Dokumentasjon";
        return view('pages.info.dokumentasjon')->with('title', $title);
    }

    public function lastNed($file_name) {
        $file_path = public_path('files/'.$file_name);
        return response()->download($file_path);
    }

    public function veiledning(){
        $title = "Veiledning";
        return view('pages.info.veiledning')->with('title', $title);
    }

    public function forprosjekt(){
        $title = "Forprosjekt";
        return view('pages.info.forprosjekt')->with('title', $title);
    }

    public function prosjektrapport(){
        $title = "Prosjektrapport";
        return view('pages.info.prosjektrapport')->with('title', $title);
    }

    public function evaluering(){
        $title = "Evaluering";
        return view('pages.info.evaluering')->with('title', $title);
    }
}
