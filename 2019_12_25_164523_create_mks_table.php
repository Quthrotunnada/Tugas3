<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mks', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nama_mk', 30);
			$table->char('sks',2);
			$table->bigInteger('kd_mk', 9)->unique();
            $table->timestamps();
			$table->foreign('kd_mk')
			->references('kd')->on('mks')
			->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mks');
    }
}
