<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postdetails', function (Blueprint $table) {
            $table->id();
            $table->string('scid');
            $table->string('fullname');
            $table->string('office');
            $table->string('category');
            $table->text('post');
            $table->string('post_date');
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
        Schema::dropIfExists('postdetails');
    }
}
