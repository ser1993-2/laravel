<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
USE \Illuminate\Support\Facades\DB;

class CreateTestModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_models', function (Blueprint $table) {
            $table->string('name',100);
            $table->text('comment')->nullable();
            $table->enum('pol', ['male','JJ']);
            $table->increments('id');
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
        Schema::dropIfExists('test_models');
    }
}
