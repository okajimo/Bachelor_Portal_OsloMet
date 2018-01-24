<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Index";
        return view('pages.Index')->with('title', $title);
    }
}
