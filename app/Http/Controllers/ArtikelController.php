<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

use App\Exports\ArtikelExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;

use DB;
Use Exception;
use Validator;
use Alert;


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

        return view('artikel.index',['artikel' => $artikel_v]);
    }

    //export excel
    public function export_excel()
	{
		return Excel::download(new ArtikelExport, 'Artikel.xlsx');
    }
    
    public function export_pdf()
    {
    	$artikel_v = DB::table('artikels')
                        ->join('users','users.id_akun','=','artikels.id_akun')
                        ->get(array(
                            'id_artikel',
                            'judul',
                            'artikels.created_at',
                            'views',
                            'nama'
                        ));
 
    	$pdf = PDF::loadview('artikel.artikel_pdf',['artikel'=>$artikel_v]);
    	return $pdf->stream('laporan-artikel-pdf');
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

        try { 
            Artikel::create($data);
            $request->session()->flash('pesan',"Data Created Successfully");
            return redirect()->route('dashboard');
        } catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex->getMessage()); 

        }
        // Artikel::create($data);
        // $request->session()->flash('pesan',"Data Created Successfully");
        // return redirect()->route('dashboard');
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
                'updated_by' => $request->id_akun,
                'judul' =>  $request->judul,
                'content' => $request->konten,
                'funfact' => $request->funfact,
                'nama_file' => $fileName,
                'kategori' => $request->kategori
            );
        }else {
            $data = array(
                'updated_by' => $request->id_akun,
                'judul' =>  $request->judul,
                'content' => $request->konten,
                'funfact' => $request->funfact,
                'nama_file' => $request->file_name,
                'kategori' => $request->kategori
            );
        }
        try { 
            Artikel::where('id_artikel',$request->id_artikel)->update($data);
            $request->session()->flash('pesan',"Data Updated Successfully");
            return redirect()->route('artikel');
        } catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex->getMessage()); 

        }
          
        //Eksekusi
        //Artikel::where('id_artikel',$request->id_artikel)->update($data);
            
    }
    public function delete(Request $request) {
        $artikel = Artikel::where('id_artikel',$request->id_artikel)->delete();
        //$artikel->delete();
        return redirect()->route('artikel')->with('pesan',"Data has been deleted");
    }

    public function search(Request $request) {
        $cari = $request->search;
        //dd($request);
        //$artikel = DB::table('artikels')->where('judul','like',"%".$cari."%")->orWhere('kategori','like',"%".$cari."%")->get();
        $artikel_v = DB::table('artikels')
                        ->join('users','users.id_akun','=','artikels.id_akun')
                        ->where('judul','like',"%".$cari."%")
                        ->orWhere('artikels.created_at','like',"%".$cari."%")
                        ->orWhere('nama','like',"%".$cari."%")
                        ->get(array(
                            'id_artikel',
                            'judul',
                            'artikels.created_at',
                            'views',
                            'nama'
                        ));
        $request->session()->flash('searched',"1");
        return view('artikel.index',['artikel' => $artikel_v]);
    }
}
