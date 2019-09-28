<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PageController extends Controller
{
    public function index(){
        $news = News::latest()->paginate(3);
        return view('home',compact('news'));
    }
}
