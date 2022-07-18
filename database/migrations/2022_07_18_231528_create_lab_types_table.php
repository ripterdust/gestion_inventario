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
        Schema::create('lab_types', function (Blueprint $table) {
            $table->bigIncrements('lab_id');            
            $table->bigInteger('field_id')->unsigned();
            $table->foreign('field_id')->references('field_id')->on('fields');
            $table->bigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('fields');
            $table->string('lab_name', 100);
            $table->double('lab_pc');
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
        Schema::dropIfExists('lab_types');
    }
};
