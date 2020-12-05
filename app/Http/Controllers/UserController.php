<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use DB;

class UserController extends Controller{

    public function index()
    {
        $artikel = DB::table('artikels')->orderBy('views','desc')->take(2)->get();
        return view('home',['artikel' => $artikel]);
    }

    public function about() {
        return view('user.about');
    }

    public function articles() {
        $artikel = DB::table('artikels')->get();
        return view('user.articles',['artikel' => $artikel]);
    }

    public function article($artikel) {
        //increment views
        $data = Artikel::where('id_artikel',$artikel)->increment('views');
        $data = Artikel::where('id_artikel',$artikel)->first();
        $artikel = DB::table('v_artikel')->select('nama')->where('id_artikel',$artikel)->get();
        return view('user.data',compact('data'),compact('artikel'));
    }

    public function search(Request $request) {
        $cari = $request->search;
        $artikel = DB::table('artikels')->where('judul','like',"%".$cari."%")->orWhere('kategori','like',"%".$cari."%")->get();
        return view('user.articles',['artikel' => $artikel]);
    }
}
