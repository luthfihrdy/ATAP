<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use DB;

class GraphController extends Controller
{
    public function index()
    {
        //$artikel = Artikel::all();
        //$artikel_c = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->get();
        //$artikel_v = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->get();
        $artikel_v = DB::table('artikels')
                        ->join('users','users.id_akun','=','artikels.id_akun')
                        ->get(array(
                            'id_artikel',
                            'judul',
                            'artikels.created_at',
                            'views',
                            'nama'
                        ));
        
        $namaArtikel = [];
        $totalView = [];
        
        foreach ($artikel_v as $ar) {
            $namaArtikel[] = $ar->judul;
            $totalView[] = $ar->views;
        }
        //dd($namaArtikel);
        return view('artikel.graph',['artikel' => $artikel_v, 'namaArtikel' => $namaArtikel, 'totalView' => $totalView]);
    }
    
}
