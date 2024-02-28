<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyAndTosTable extends Migration
{
    public function up()
    {
        Schema::create('policy_and_tos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('privacy_policy')->nullable();
            $table->longText('tos')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
