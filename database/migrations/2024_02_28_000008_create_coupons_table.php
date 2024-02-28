<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('description')->nullable();
            $table->date('valid_till');
            $table->date('valid_from');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
