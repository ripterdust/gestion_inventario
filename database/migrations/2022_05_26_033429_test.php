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
        Schema::create('tests', function(Blueprint $table){
            $table->id();
            $table->string('CLIName');
            $table->string('TESTName');
            $table->timestamps();
            $table
                ->integer('state')// 0 -> finished, 1 -> inclomplete, 2 -> ready
                ->default(1);
            $table->string('result');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
