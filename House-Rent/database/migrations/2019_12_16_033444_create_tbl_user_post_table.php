<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_post', function (Blueprint $table) {
            $table->bigIncrements('user_post_id');
            $table->string('badroom');
            $table->string('daiing');
            $table->string('drowing');
            $table->string('bathroom');
            $table->string('corridor');
            $table->string('address');
            $table->string('air');
            $table->string('cell');
            $table->string('status');
            $table->string('rent');
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
        Schema::dropIfExists('tbl_user_post');
    }
}
