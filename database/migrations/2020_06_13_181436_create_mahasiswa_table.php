<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_mahasiswa', 150);
            $table->string('tempat_lahir', 150);
            $table->date('tanggal_lahir');
            $table->string('phone', 13);
            $table->enum('jenis_kelamin', ['Pria', 'Wanita'])->nullable();
            $table->integer('id_universitas')->unsigned()->index();
            $table->foreign('id_universitas')->references('id')->on('universitas');
            $table->integer('id_korwil')->unsigned()->index();
            $table->foreign('id_korwil')->references('id')->on('korwil');
            $table->date('tahun_masuk');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->text('alamat');
            $table->enum('status_mahasiswa', ['Belum Lulus', 'Sudah Lulus','Mengudurkan Diri'])->nullable();
            $table->string('foto_mahasiswa')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_ktm')->nullable();
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
        Schema::dropIfExists('mahasiswa');
    }
}
