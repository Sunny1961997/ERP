<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date');
            $table->unsignedBigInteger('supplier_id');
            $table->integer('transport_cost')->unsigned();
            $table->unsignedBigInteger('employee_id');
            $table->timestamps();

            $table->foreign('supplier_id')
              ->references('id')->on('suppliers')
              ->onDelete('cascade');

            $table->foreign('employee_id')
              ->references('id')->on('employees')
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
        Schema::dropIfExists('purchages');
    }
}