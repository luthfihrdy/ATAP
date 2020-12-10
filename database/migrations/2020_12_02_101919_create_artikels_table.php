<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->bigIncrements('id_artikel');
            $table->integer('id_akun');
            $table->integer('updated_by')->nullable();
            $table->string('judul');
            $table->text('content');
            $table->text('funfact');
            $table->string('nama_file');
            $table->string('kategori');
            $table->string('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
