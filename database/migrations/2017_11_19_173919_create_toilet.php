<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToilet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
        Schema::create('toilet', function (Blueprint $table) {
            $table->int('id');
            $table->time('buka');
            $table->time('tutup');
            $table->int('nilai');
            $table->string('tempat');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toilet');
    }
}
