<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.news',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create-news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'tgl' => 'required',
            'author' => 'required',
            'location' => 'required',
            'foto' => 'required',
        ]);

        $foto = $request->file('foto');
        $namafile = Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('upload/news/'),$namafile);
        // dd($namafile);

        $create = News::create([
            'title' => $request->title,
            'tgl' => $request->tgl,
            'author' => $request->author,
            'location' => $request->location,
            'foto' => $namafile,
            'description' => $request->description
        ]);

        return redirect()->route('news.index')->with('success','Berhasil menambahkan workshop');
        // dd($create);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $news = News::where('id',$id)->first();
        return view('admin.news.edit-news',compact('news'));
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
        $fotoLama = $request->fotoLama;
            $foto = $request->file('foto');
            if(!empty($foto)){
                $foto = $request->file('foto');
                $namaBaru = Carbon::now()->timestamp . '_' . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('upload\news'),$namaBaru);
                unlink(public_path('\upload\news\\').$fotoLama);
            }else{
                $foto = $fotoLama;
                $namaBaru = $foto;
            }

        $update = News::where('id',$id)->update([
                'title' => $request->title,
                'tgl' => $request->tgl,
                'author' => $request->author,
                'location' => $request->location,
                'foto' => $namaBaru,
                'description' => $request->description
            ]);
            return redirect()->route('news.index')->with('success','Berhasil menambahkan workshop');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = News::where('id',$id)->first();
        $foto = $del->foto;
        unlink(public_path('\upload\news\\'.$foto));
        News::where('id',$id)->delete();
        // dd($del);
        return back()->with('success','Workshop berhasil dihapus !');
    }
}
