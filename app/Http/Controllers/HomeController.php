<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Participant;
use App\News;
use JsValidator;
use Illuminate\Validation\Validator;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function landing(){


      $galleries = Gallery::latest()->paginate(6);
      $participants = Participant::all();
      $news = News::latest()->paginate(3);
      $new = News::orderBy(
          'id', 'desc'
        )->first();

      //dd($new);

      foreach ($news as $key => $v) {
          if ($key === 0) {
            $color = 'primary';
          }elseif($key == 1){
            $color = 'success';
          }else{
            $color = 'info';
          }
      }
      return view('landing',compact('galleries','participants','news','new','color'));
    }
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
