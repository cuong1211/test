<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoaHocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_khoa_hoc', function (Blueprint $table) {
            $table->id();
            $table->string('Ten Khoa Hoc')->nullable();
            $table->text('Mo Ta')->nullable();
            $table->integer('Thoi Gian')->nullable();
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
        Schema::dropIfExists('_khoa_hoc');
    }
}
