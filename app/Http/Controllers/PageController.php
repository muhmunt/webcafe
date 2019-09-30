<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PageController extends Controller
{
    public function index()
    {
        //dd('sdfsd');
        $galleries = Gallery::all();
        $participants = Participant::all();
        $news = News::latest()->paginate(3);

        return view('home')->with(compact('galleries','participants','news'));
    }
}
