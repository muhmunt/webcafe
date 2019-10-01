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
        $new = News::where('id','desc')->first();

        return view('home')->with(compact('galleries','participants','news','new'));
    }
}
