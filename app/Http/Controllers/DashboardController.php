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
        $artikel_v = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->get();
        return view('dashboard',['artikel' => $artikel_v]);
    }
}
