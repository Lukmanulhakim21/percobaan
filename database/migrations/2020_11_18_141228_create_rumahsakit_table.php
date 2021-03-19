<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahsakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumahsakit', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama', 100);
            $table->string('jenis_kelamin', 100);
            // $table->enum('jenis_kelamin', array('draft','published'))->default('draft');
            $table->text('alamat', 65535);
            $table->integer('no_dokter')->index('user_id_foreign');

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
        Schema::dropIfExists('rumahsakit');
    }
}
