<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model {

    const CREATE_ARTICLE = "create_article";
    const MANAGE_OWN_ARTICLE = "manage_own_article";
    const MANAGE_OTHER_ARTICLE = "manage_other_article";
    const UPDATE_USERS_ROLE = "update_users_role";
    const MANAGE_ROLES = "manage_roles";
    const ADMINISTRATOR = "administrator";

    public function members() {
        return $this->hasMany(User::class);
    }
}
