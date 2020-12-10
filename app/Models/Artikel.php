<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */
    protected $table = "v_artikel";
    protected $fillable = [

         'judul',
         'created_at',
         'nama',
         'views',

    ];

    protected $primaryKey = 'id_artikel';
}
