<?php

namespace App\Exports;

use App\Artikel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use DB;

class ArtikelExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('artikels')
                ->join('users','users.id_akun','=','artikels.id_akun')
                ->get(array(
                    'id_artikel',
                    'judul',
                    'artikels.created_at',
                    'views',
                    'nama'
                ));
    }

    public function headings(): array
    {
        return [
            'ID Artikel',
            'Judul',
            'Di Post Tanggal',
            'Jumlah Pembaca',
            'Nama Pembuat'
        ];
    }
}
