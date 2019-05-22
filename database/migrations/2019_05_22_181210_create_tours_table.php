<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug',128)->unique();
            $table->unsignedInteger('destination_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('avatar',255)->nullable();
            $table->float('price');
            $table->float('price_child');
            $table->unsignedInteger('max_people')->default(0);
            $table->float('rating')->default(0);
            $table->tinyInteger('status')->unsigned()->default(1);
            $table->dateTime('start_day');
            $table->dateTime('end_day');
            $table->timestamps();
        });
        Schema::create('tour_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tour_id');
            $table->char('lang', 2);
            $table->string('title', 128);
            $table->string('brief', 255);
            $table->text('description');
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
        Schema::dropIfExists('tours');
    }
}
