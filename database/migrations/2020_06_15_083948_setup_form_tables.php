<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetupFormTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('form_response', function(Blueprint $table) {
             $table->id();
             $table->foreignId('form_id');
             $table->foreignId('user_id');
             $table->boolean('accepted');
             $table->boolean('archived');
        });

        Schema::create('form_response_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('response_id');
            $table->string('question');
            $table->longText('answer');

            $table->timestamps();
        });

        Schema::create('form_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id');
            $table->integer('order');
            $table->string('question');
            $table->integer('type');
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
        Schema::dropIfExists('forms');
        Schema::dropIfExists('form_responses');
        Schema::dropIfExists('form_questions');
    }
}
