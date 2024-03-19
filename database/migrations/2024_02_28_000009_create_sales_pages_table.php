<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesPagesTable extends Migration
{
    public function up()
    {
        Schema::create('sales_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->nullable()->unique();
            $table->longText('header_script')->nullable();
            $table->longText('footer_script')->nullable();
            $table->longText('html_content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
