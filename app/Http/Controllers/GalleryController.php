<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Gallery;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\GalleryRequest;
use View;

class GalleryController extends Controller
{
    public function index(){

        $user = Auth::user();

        $galleries = Gallery::all();

        return view('admin.galleries.index')->with(compact('galleries', 'user'));
    }

    public function create(){
        $user = Auth::user();
        $galleries = Gallery::all();

        return View::make('admin.galleries.add')
            ->with(compact('galleries','user'));
    }

    public function store(Request $request, GalleryRequest $requests){

        $gambar = $request->file('file');
        $namafile = Carbon::now()->timestamp. '_' . uniqid() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('upload/galleries/'),$namafile);

        Gallery::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'picture' => $namafile
        ]);

        return redirect('admin/galleries');

    }

    public function edit($id){

        $user = Auth::user();

        $gallery  = Gallery::where('id',$id)->first();


        return View::make('admin.galleries.edit')
            ->with(compact('gallery','user'));

    }

    public function update(Request $request, $id){

        $gallery = Gallery::find($id);
        //dd($request->all());
        if($gallery->picture == $request['picture']){
            $fotoLama = $request['picture'];
        }else{
            $fotoLama = $gallery->picture;
        }

        $foto = $request->file('file');

        //dd($foto);

        if(empty($foto)){
            $foto = $fotoLama;
            $namabaru = $foto;
        }else{
            $foto = $request->file('file');
            $namabaru = Carbon::now()->timestamp. '_' . uniqid() . '.' .$foto->getClientOriginalExtension();
            $foto->move(public_path('upload/galleries/'),$namabaru);
            unlink(public_path('\upload\galleries\\'.$fotoLama));
        }

        //dd($gallery);

        Gallery::where('id', $id)->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'picture' => $namabaru
        ]);

        return redirect('admin/galleries');

    }

    public function destroy($id){
        //dd($id);
        $gallery = Gallery::find($id);
        unlink(public_path('\upload\galleries\\'.$gallery->picture));
        $gallery->delete();


        return redirect('/admin/galleries');
    }

}
