<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateH5pTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h5p', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('course_id')->nullable();
            $table->string('lesson_id')->nullable();
            $table->string('unit_id')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('h5p');
    }
}
