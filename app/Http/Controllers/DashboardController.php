<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$artikel = Artikel::all();
        $artikel_c = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->get();
        $artikel_v = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->take(5)->orderBy('created_at','desc')->get();
        $artikel_s = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->sum('views');
        return view('dashboard',['artikel' => $artikel_v,'artikel_c' => $artikel_c,'jumlah' => $artikel_s]);
    }
}
