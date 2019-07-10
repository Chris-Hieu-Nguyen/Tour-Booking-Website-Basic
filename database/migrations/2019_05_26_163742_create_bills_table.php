<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('email',191);
            $table->string('phone',11);
            $table->float('total');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
        Schema::create('bill_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('bill_id');
            $table->unsignedInteger('tour_id');
            $table->integer('people')->default(0);
            $table->float('price');
            $table->integer('qty')->default(0);
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
        Schema::dropIfExists('bills');
    }
}
