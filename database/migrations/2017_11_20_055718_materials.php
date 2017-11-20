<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('major_metal');
            $table->string('due_date');
            $table->string('description');
            $table->string('image_url');
            $table->string('combinations');
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
            Schema::dropIfExists('materials');
    }
}
