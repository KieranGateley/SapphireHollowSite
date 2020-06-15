<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {

    protected $fillable = ['name', ];

    public function questions() { return $this->hasMany(FormQuestion::class); }

    public function responses() { return $this->hasMany(FormResponse::class); }
}
