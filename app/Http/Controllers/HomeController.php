<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Participant;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //dd('sdfsd');
        $galleries = Gallery::all();
        $participants = Participant::all();
        $news = News::latest()->paginate(3);

        return view('home')->with(compact('galleries','participants','news'));
    }
}
