<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< Updated upstream
use Validator,Redirect,Response;
=======
use App\DataTables\ArtikelDataTable;
>>>>>>> Stashed changes
use App\Artikel;

class ArtikelController extends Controller
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
    public function index(ArtikelDataTable $dataTable )
    {
<<<<<<< Updated upstream
        return view('home');
=======
        $artikel_v = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->get();
        return $dataTable->render('artikel.index',['artikel' => $artikel_v]);
        //print_r($dataTable);
>>>>>>> Stashed changes
    }

    public function add() {
        return view('artikel.add');
    }

    public function createArtikel(Request $request) {
        //dd($request);
        // $validateData = $request->validate([
        //     'judul'   => 'required|min:0',
        //     'planting' => 'required|min:0',
        //     'preparing' => 'required|min:0',
        //     'howto' => 'required|min:0',
        //     'funfact' => 'required|min:0',
        //     'kategori' => 'required|min:0',

        // ]);

        $this->validate($request, [
            'judul'   => 'required|min:0',
            'konten' => 'required|min:0',
            'funfact' => 'required|min:0',
            'kategori' => 'required|min:0',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('file');
        $fileName = time().'.'.$image->getClientOriginalName();
        $destinationPath = public_path('/asset/images');
        $image->move($destinationPath, $fileName);
        $data = array(
            'id_akun' => $request->id_akun,
            'judul' =>  $request->judul,
            'content' => $request->konten,
            'funfact' => $request->funfact,
            'nama_file' => $fileName,
            'kategori' => $request->kategori,
            'views' => 0
        );
            
        Artikel::create($data);
        // dd($data);
        
        return redirect()->route('dashboard');
    }

    public function edit($artikel){
        $result = Artikel::where('id_artikel',$artikel)->first();

        return view('artikel.edit',compact('result'));
    }

    public function deleteRecord(Request $request, $id)
    {
       
        if(!$id){
           return redirect('/database');
        }

        $check = Artikel::where('id_artikel', $id)->delete();
        return Redirect::to("database")->withSuccess('Great! data successfully deleted');
    }

}
