<?php

use App\UserRole;
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
            $table->boolean(UserRole::CREATE_ARTICLE)->default(false);
            $table->boolean(UserRole::MANAGE_OWN_ARTICLE)->default(false);
            $table->boolean(UserRole::MANAGE_OTHER_ARTICLE)->default(false);
            $table->boolean(UserRole::UPDATE_USERS_ROLE)->default(false);
            $table->boolean(UserRole::MANAGE_ROLES)->default(false);
            $table->boolean(UserRole::ADMINISTRATOR)->default(false);
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
