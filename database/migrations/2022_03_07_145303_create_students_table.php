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
            $table->string('no_peserta', 16)->nullable();
            $table->foreignId('program_id');
            $table->string('nama', 32);
            $table->string('nama_lengkap', 55);
            $table->date('tanggal_lahir', 55);
            $table->enum('jk', ['Laki - laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Protestan', 'Hindu', 'Budha', 'Konghuchu']);
            $table->enum('ukuran_baju', ['M','L','XL','XXL','XXXL']);
            $table->string('no_hp', 13);
            $table->string('anak_ke', 2);
            $table->text('alamat');
            $table->string('nisn', 18);
            $table->string('nik', 18);
            $table->string('kk', 18);
            $table->string('kip', 18)->nullable();
            $table->string('asal_sekolah', 100);
            $table->text('alamat_asal_sekolah');
            $table->string('nomor_seri_ijazah', 18);
            $table->date('tgl_lulus');
            $table->string('email', 35);
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
        Schema::dropIfExists('students');
    }
}
