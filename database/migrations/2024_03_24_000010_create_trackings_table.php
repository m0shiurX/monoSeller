<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('header_script')->nullable();
            $table->longText('footer_script')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
