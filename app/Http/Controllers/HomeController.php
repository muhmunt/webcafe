<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Participant;
use App\News;
use Mail;

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
        $galleries = Gallery::all();
        $participants = Participant::all();
        $news = News::latest()->paginate(3);
        $new = News::where('id','desc')->first();

        return view('home')->with(compact('galleries','participants','news','new'));
    }

    public function sendGmail(){
        $data = array('name'=>"Sam Jose", "body" => "Test mail");
    
        Mail::send('gmailview', $data, function($message) {
            $message->to('muhmunt@gmail.com', 'Agam Bocil')
            ->subject('From Laravel With Gmail');
            $message->from('dimasroger89@gmail.com',' Rogersovich');
 
          });
 
          if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
          }else{
            return response()->json('Yes, You have sent email to GMAIL from LARAVEL !!');
          }
    }
}
