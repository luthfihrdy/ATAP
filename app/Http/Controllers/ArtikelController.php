<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use DB;
Use Exception;
use Validator;

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
    public function index()
    {
        $artikel_v = DB::table('v_artikel')->select('id_artikel','judul','created_at','views','nama')->get();
        return view('artikel.index',['artikel' => $artikel_v]);
    }

    public function add() {
        return view('artikel.add');
    }

    public function createArtikel(Request $request) {
        //dd($request);

        $this->validate($request, [
            'judul'   => 'required|min:0',
            'konten' => 'required|min:0',
            'funfact' => 'required|min:0',
            'kategori' => 'required|min:0',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
        //increment views
        //$data = Artikel::where('id_artikel',$artikel)->increment('views');
        $result = Artikel::where('id_artikel',$artikel)->first();

        return view('artikel.edit',compact('result'));
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'file' => 'max:5120', //5MB 
        ]);

        $this->validate($request, [
            'id_artikel' => 'required|min:0',
            'judul'   => 'required|min:0',
            'konten' => 'required|min:0',
            'funfact' => 'required|min:0',
            'kategori' => 'required|min:0',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('file')) {     
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
                'kategori' => $request->kategori
            );
        }else {
            $data = array(
                'id_akun' => $request->id_akun,
                'judul' =>  $request->judul,
                'content' => $request->konten,
                'funfact' => $request->funfact,
                'nama_file' => $request->file_name,
                'kategori' => $request->kategori
            );
        }
        try { 
            Artikel::where('id_artikel',$request->id_artikel)->update($data);
              // Closures include ->first(), ->get(), ->pluck(), etc.
          } catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex->getMessage()); 
            // Note any method of class PDOException can be called on $ex.
          }
        //Eksekusi
        //Artikel::where('id_artikel',$request->id_artikel)->update($data);
            $request->session()->flash('pesan',"Data berhasil diperbarui");
            return redirect()->route('artikel');
    }
    public function delete(Request $request) {
        $artikel = Artikel::where('id_artikel',$request->id_artikel)->delete();
        //$artikel->delete();
        return redirect()->route('artikel')->with('pesan',"Data berhasil dihapus");
    }
}
