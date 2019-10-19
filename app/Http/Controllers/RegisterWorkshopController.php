<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterWorkshop;
use App\News;
use JsValidator;
use Illuminate\Validation\Validator;
use App\Http\Requests\RegisterWorkshopRequest;
use Mail;
use Illuminate\Support\Facades\Auth;

class RegisterWorkshopController extends Controller
{

    public function index()
    {

        $user = Auth::user();

        $data = RegisterWorkshop::with('News')->latest()->paginate(10);
        // dd($data);
        return view('admin.registered.index',compact('data','user'));
    }
    public function create()
    {
        //
    }


    public function store(Request $request, RegisterWorkshopRequest $requests)
    {
        //dd($requests->validated());
        $validated = $requests->validated();

        // dd($request->all());

        $registered = RegisterWorkshop::all();

        if(empty($registered )){
            $seat_order = 0;
        }else{
            $seat_order = count($registered);
        }

        $new = News::orderBy('id','desc')->first();

        $seat = $new->seat;

        $seat_update = $seat_order < $seat ;

        //dd($request->all());

        // $create = [];
        if($seat_update){
            // dd('rest');
            $create = RegisterWorkshop::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'number_telp' => $request->nomor,
                'new_id' => $new->id,
                'status' => 0,
            ]);

            $email = $request->email;
                Mail::send('gmailview',array(
                    'nama'=>$request->get('nama'),
                    'email'=>$request->get('email'),
                    'tgl' => $new->tgl_mulai,
                    'workshop' => $new->title,
                    'foto'=>'public/images/confirm1.png',

                    ),function($message) use ($email){
                        $message->to($email,'Pendaftaran Workshop Uncle Jo')
                        ->subject('Pendaftaran Workshop Uncle Jo');
                        $message->from('agamtwiche@gmail.com',' Uncle JO Coffe Shop');
                });

            $message = 'Selamat '. $request->nama .', Berhasil Terdaftar Dalam Work Shop';
            $skinMessage = 'success';
            $bg = 'public/images/confirm1.png';
            $icon = 'la-check-circle-o';

        }else{
            $message = 'Maaf Work Shop Sudah Penuh';
            $skinMessage = 'danger';
            $bg = 'public/images/denied.png';
            $icon = 'la-exclamation-triangle';
        }


        return view('layouts.registered')
            ->with(compact(
                'message',
                'skinMessage',
                'bg',
                'icon',
            ));
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        RegisterWorkshop::where('id',$id)->update([
            'status' => 1
        ]);
        $data = RegisterWorkshop::where('id',$id)->first();
        $message = 'Pendaftar dengan nama ' . $data->nama . ' sudah membayar workshop';
        // dd($message);
        return back()->with(compact('message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RegisterWorkshop::where('id',$id)->delete();
        return back()->with('success','Register has been deleted !');
    }
}
