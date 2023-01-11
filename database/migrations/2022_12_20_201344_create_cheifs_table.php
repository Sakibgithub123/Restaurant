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
        Schema::create('cheifs', function (Blueprint $table) {
            $table->id();
            $table->string('cheifs_name');
            $table->string('cheifs_designation');
            $table->text('image');
            $table->string('twitter')->nullable();
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('cheifs');
    }
};
