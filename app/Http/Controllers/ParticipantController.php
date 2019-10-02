<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Participant;
use View;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    public function index(){

        $user = Auth::user();

        $participants = Participant::all();

        return view('admin.participants.index')->with(compact('participants','user'));
    }

    public function create(){

        $user = Auth::user();
        $participants = Participant::all();

        return View::make('admin.participants.add')
            ->with(compact('participants','user'));
    }

    public function store(Request $request){

        $gambar = $request->file('file');
        //dd($gambar);
        $namafile = Carbon::now()->timestamp. '_' . uniqid() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('upload/participants/'),$namafile);

        Participant::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'picture' => $namafile
        ]);

        return redirect('admin/participants');

    }

    public function edit($id){

        $user = Auth::user();

        $participant  = Participant::where('id',$id)->first();


        return View::make('admin.participants.edit')
            ->with(compact('participant','user'));

    }

    public function update(Request $request, $id){

        $participant = Participant::find($id);
        //dd($request->all());
        if($participant->picture == $request['picture']){
            $fotoLama = $request['picture'];
        }else{
            $fotoLama = $participant->picture;
        }

        $foto = $request->file('file');

        //dd($foto);

        if(empty($foto)){
            $foto = $fotoLama;
            $namabaru = $foto;
        }else{
            $foto = $request->file('file');
            $namabaru = Carbon::now()->timestamp. '_' . uniqid() . '.' .$foto->getClientOriginalExtension();
            $foto->move(public_path('upload/participants/'),$namabaru);
            unlink(public_path('\upload\participants\\'.$fotoLama));
        }

        //dd($participant);

        Participant::where('id', $id)->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'picture' => $namabaru
        ]);

        return redirect('admin/participants');

    }

    public function destroy($id){
        //dd($id);
        $participant = Participant::find($id);
        unlink(public_path('\upload\participants\\'.$participant->picture));
        $participant->delete();


        return redirect('/admin/participants');
    }

}
