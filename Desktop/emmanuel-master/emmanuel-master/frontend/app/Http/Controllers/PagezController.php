<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagezController extends Controller
{
    public function home(){
        $title = "Home | Emmanuel's Concept";
        return view('pages.home', compact('title'));
    }
    public function about(){
        $title = "About | Emmanuel's Concept";
        return view('pages.about', compact('title'));
    }
    public function services(){
        $title = "Services | Emmanuel's Concept";
        return view('pages.services', compact('title'));
    }
    public function events(){
        $title = "Events | Emmanuel's Concept";
        return view('pages.events', compact('title'));
    }
    public function talents(){
        $title = "Our Talents | Emmanuel's Concept";
        return view('pages.talent', compact('title'));
    }
    public function browns(){
        $title = "Brown's Eye | Emmanuel's Concept";
        return view('pages.browns', compact('title'));
    }
    public function artiste(){
        $title = "Our Artiste | Emmanuel's Concept";
        return view('pages.artiste', compact('title'));
    }
}
