<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\History;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\WorkshopRequest;

class NewsController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $dateNow = Carbon::now();
        //dd($histories);

        $news = News::latest()->paginate(10);

        foreach($news as $n){
            $dateEx = date_create($n->tgl_akhir);
            $diff = date_diff($dateEx, $dateNow);
            //dd($diff->invert);
            if($diff->invert == 0){

                News::where('id',$n->id)->update([
                    'delete_is' => 1
                ]);

                $histories = History::all()->count();
                $new = News::where('id',$n->id)->first();

                if($histories != 0){

                    $cek = History::where('volume',$n->volume)->first();

                    if($cek){

                    }else{
                        History::create([
                            'title' => $new->title,
                            'tgl_mulai' => $new->tgl_mulai,
                            'tgl_akhir' => $new->tgl_akhir,
                            'author' => $new->author,
                            'volume' => $new->volume,
                            'location' => $new->location,
                            'seat' => $new->seat,
                            'foto' => $new->foto,
                            'description' => $new->description,
                            'delete_is' => 0
                        ]);
                    }

                }else{
                    History::create([
                        'title' => $new->title,
                        'tgl_mulai' => $new->tgl_mulai,
                        'tgl_akhir' => $new->tgl_akhir,
                        'author' => $new->author,
                        'volume' => $new->volume,
                        'location' => $new->location,
                        'seat' => $new->seat,
                        'foto' => $new->foto,
                        'description' => $new->description,
                        'delete_is' => 0
                    ]);
                }
            }

        }

        return view('admin.news.news',compact('news','user'));
    }

    public function recent()
    {
        $user = Auth::user();

        $news = History::latest()->paginate(10)
            ->where('delete_is','0');

        return view('admin.news.recent-news', compact('user','news'));
    }


    public function create()
    {
        $user = Auth::user();
        return view('admin.news.create-news', compact('user'));
    }


    public function store(Request $request, WorkshopRequest $requests)
    {

        $validated = $requests->validated();

        $foto = $request->file('foto');
        $namafile = Carbon::now()->timestamp . '_' . uniqid() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('upload/news/'),$namafile);
        // dd($namafile);

        $create = News::create([
            'title' => $request->title,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            'author' => $request->author,
            'location' => $request->location,
            'seat' => $request->seat,
            'foto' => $namafile,
            'volume' => $request->volume,
            'description' => $request->description,
            'delete_is' => 0
        ]);

        return redirect()->route('news.index')->with('success','Berhasil menambahkan workshop');
        // dd($create);
    }

    public function edit($id)
    {
        $user = Auth::user();

        $news = News::where('id',$id)->first();
        return view('admin.news.edit-news',compact('news','user'));
    }

    public function changeStatus($id)
    {
        $user = Auth::user();

        $news = News::where('id',$id)->first();
        //dd($news);
        News::where('id',$id)->update([
            'delete_is' => 1
        ]);

        return redirect()->route('news.index')->with('danger','Berhasil Menghapus');

    }

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

        News::where('id',$id)->update([
                'title' => $request->title,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_akhir' => $request->tgl_akhir,
                'author' => $request->author,
                'location' => $request->location,
                'seat' => $request->seat,
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
