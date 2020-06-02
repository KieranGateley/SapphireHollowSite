<?php

use App\User;
use App\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->addDefaultRoles();
        $this->addRoot();
    }

    private function addDefaultRoles() {

        $root_role = UserRole::create([
            'name' => "Root Administrator",
            UserRole::CREATE_ARTICLE => true,
            UserRole::MANAGE_OWN_ARTICLE => true,
            UserRole::MANAGE_OTHER_ARTICLE => true,
            UserRole::UPDATE_USERS_ROLE => true,
            UserRole::MANAGE_ROLES => true,
            UserRole::ADMINISTRATOR => true,
        ]);

        $default_role = UserRole::create([
            'name' => "User",
        ]);

        $mod_role = UserRole::create([
            'name' => "Moderator",
            UserRole::CREATE_ARTICLE => true,
            UserRole::MANAGE_OWN_ARTICLE => true,
        ]);

        $admin_role = UserRole::create([
            'name' => "Administrator",
            UserRole::CREATE_ARTICLE => true,
            UserRole::MANAGE_OWN_ARTICLE => true,
            UserRole::MANAGE_OTHER_ARTICLE => true,
        ]);

        $default_role->save();
        $mod_role->save();
        $admin_role->save();
        $root_role->save();
    }

    private function addRoot() {
        $root = User::create([
            'name' => 'Root Administrator',
            'email' => 'root@localhost',
            'email_verified_at' => now(),
            'password' => Hash::make('root_password'),
            'role_id' => 1,
        ]);
        $root->save();
    }
}
