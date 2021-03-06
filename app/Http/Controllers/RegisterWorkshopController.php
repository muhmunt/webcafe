<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterWorkshop;
use App\News;
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

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        // dd($search);
        $data = RegisterWorkshop::where('nama','like','%'.$keyword.'%')
        ->latest()->paginate(10);
        // dd($data);
        return view('admin.registered.index',compact('data'));
    }


    public function store(Request $request, RegisterWorkshopRequest $requests)
    {
        $validated = $requests->validated();

        // dd($validated);

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
                'size_chart' => $request->size_chart,
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

            $message = 'Selamat '. ucwords($request->nama) .', Berhasil Terdaftar Dalam Work Shop';
            $skinMessage = 'dark';
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


    public function edit($id)
    {
        //
    }

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

    public function destroy($id)
    {
        RegisterWorkshop::where('id',$id)->delete();
        return back()->with('success','Register has been deleted !');
    }
}
