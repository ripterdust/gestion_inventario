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
        Schema::create('laboratory', function(Blueprint $table){
            $table->id();
            $table->string('category');
            $table->string('name');
            $table
                ->string('results')
                ->default('[]');
            $table
                ->string('references')
                ->default('[]');
            $table
                ->string('count')
                ->defualt('[]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratory');
    }
};
