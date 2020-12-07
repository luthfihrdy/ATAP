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
        //$artikel_c = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->get();
        $artikel_c = DB::table('artikels')
                        ->join('users','users.id_akun','=','artikels.id_akun')
                        ->get(array(
                            'id_artikel',
                            'judul',
                            'artikels.created_at',
                            'views',
                            'nama'
                        ));
        //$artikel_v = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->take(5)->orderBy('created_at','desc')->get();
        $artikel_v = DB::table('artikels')
                        ->join('users','users.id_akun','=','artikels.id_akun')
                        ->orderBy('created_at','desc')
                        ->take(5)
                        ->get(array(
                            'id_artikel',
                            'judul',
                            'artikels.created_at',
                            'views',
                            'nama'
                        ));
        //$artikel_s = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->sum('views');
        $artikel_s = DB::table('artikels')
                        ->join('users','users.id_akun','=','artikels.id_akun')
                        ->sum('views');
        return view('dashboard',['artikel' => $artikel_v,'artikel_c' => $artikel_c,'jumlah' => $artikel_s]);
    }

    public function profile($userid) {
        $profile = DB::table('users')->where('id_akun',$userid)->select('id_akun','username','nama','email','alamat','no_hp','nama_file')->first();
        return view('profile',['profile' => $profile]);
    }
}
