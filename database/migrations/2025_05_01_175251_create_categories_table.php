<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    schema::create('categories', function (Blueprint $table){
        $table->id();
        $table->string('name');
        $table->string('slug');
        $table->text('description');
        $table->string('image')->nullable();
        $table->integer('order')->nullable();
        $table->integer('status')->default(1);
        $table->timestamps();
    });
}
}
