<?php

use App\UserRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->addDefaultRoles();
    }

    private function addDefaultRoles() {
        $root_role = UserRole::create([
            'id' => 0,
            'name' => "Root Administrator",
            'create_article' => true,
            'manage_own_article' => true,
            'manage_other_article' => true,
            'update_users_role' => true,
            'manage_roles' => true,
            'administrator' => true,
        ]);
        $root_role->save();

        $default_role = UserRole::create([
            'name' => "User",
        ]);
        $default_role->save();

        $mod_role = UserRole::create([
            'name' => "Moderator",
            'create_article' => true,
            'manage_own_article' => true,
        ]);
        $mod_role->save();

        $admin_role = UserRole::create([
            'name' => "Moderator",
            'create_article' => true,
            'manage_own_article' => true,
            'manage_other_article' => true,
        ]);
        $admin_role->save();
    }
}
