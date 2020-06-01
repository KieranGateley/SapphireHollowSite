<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{

    public function members() {
        return $this->hasMany(User::class);
    }
}
