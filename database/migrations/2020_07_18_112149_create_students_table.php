<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nisn');
            $table->string('nis');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('agama');
            $table->integer('anak_ke');
            $table->text('alamat');
            $table->string('telp');
            $table->string('sekolah_asal');
            $table->string('diterima_dikelas');
            $table->string('tanggal_diterima');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->text('alamat_ortu');
            $table->string('telp_rumah');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali');
            $table->string('alamat_wali');
            $table->string('telp_wali');
            $table->string('pekerjaan_wali');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
