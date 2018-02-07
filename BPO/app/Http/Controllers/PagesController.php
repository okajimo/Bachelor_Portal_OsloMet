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
}
