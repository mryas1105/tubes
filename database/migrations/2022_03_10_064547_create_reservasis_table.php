<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_check_in');
            $table->date('tanggal_check_out');
            $table->foreignId('kamar_id')->constrained('kamars')->onDelete('cascade')->onUpdate('cascade');
            $table->index('kamar_id');
            $table->string('nama_pemesan');
            $table->string('no_pemesan');
            $table->string('email_pemesan');
            $table->string('nik');
            $table->enum('status',['Booking','Cek In','Check Out']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasis');
    }
}
