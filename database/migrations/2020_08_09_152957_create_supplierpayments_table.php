<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplierpayments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date');
            $table->integer('amount')->unsigned();
            $table->unsignedBigInteger('supplier_id');
            $table->string('narration');
            $table->timestamps();

            $table->foreign('supplier_id')
              ->references('id')->on('suppliers')
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
        Schema::dropIfExists('supplierpayments');
    }
}