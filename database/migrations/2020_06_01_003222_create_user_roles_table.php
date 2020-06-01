<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('create_article')->default(false);
            $table->boolean('manage_own_article')->default(false);
            $table->boolean('manage_other_article')->default(false);
            $table->boolean('update_users_role')->default(false);
            $table->boolean('manage_roles')->default(false);
            $table->boolean('administrator')->default(false);
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
        Schema::dropIfExists('user_roles');
    }
}
