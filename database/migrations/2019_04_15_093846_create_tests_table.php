<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //https://laravel.ru/docs/v5/migrations
        Schema::create('tests', function (Blueprint $table) {
            $table->string('exercise');
            $table->string('group');
            $table->string('short_name', 30);
            $table->integer('number_of_repetitions');
            $table->float('weight_default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
