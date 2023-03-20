<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('nip');
            $table->integer('nip1');
            $table->string('nama');
            $table->enum('jenis', [
                'uang',
                'barang',
                'diskon',
                'komisi',
                'perjalanan',
                'peginapan',
                'wisata',
                'pengobatan',
                'lainnya'
            ]);
            $table->string('deskripsi');
            $table->string('harga');
            $table->enum('peristiwa', [
                'pernikahan',
                'mutasi',
                'pelayanan',
                'nonpelayanan',
                'seminar'
            ]);
            $table->date('tgl');
            $table->string('lokasi');
            $table->string('gratifikasi');
            $table->string('image');
            $table->string('namalengkap');
            $table->string('namalengkap1');
            $table->string('jabatan');
            $table->string('pangkat');
            $table->string('jabatan1');
            $table->string('pangkat1');
            $table->string('bagian');
            $table->string('bagian1');
            $table->string('bentukpoten');
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
        Schema::dropIfExists('forms');
    }
};
