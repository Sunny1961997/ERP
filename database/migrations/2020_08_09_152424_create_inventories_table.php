<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('sku');
            $table->integer('price')->unsigned();
            $table->integer('current_qty')->unsigned();
            $table->integer('total_qty')->unsigned();
            $table->string('images');
            $table->string('size_qty');
            $table->string('slug');
            $table->unsignedBigInteger('purchage_id');
            $table->timestamps();

            $table->foreign('purchage_id')
              ->references('id')->on('purchages')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}