<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->bigIncrements('field_id');
            $table->bigInteger('lab_id')->unsigned();
            $table->foreign('lab_id')->references('lab_id')->on('lab_list');
            $table->string('field_pm', 45);
            $table->integer('field_rgmin');
            $table->integer('field_rgmax');
            $table->string('field_tp', 5);
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
        Schema::dropIfExists('fields');
    }
};
