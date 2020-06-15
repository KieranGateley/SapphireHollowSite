<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormQuestion extends Model {

    protected $fillable = ['question', 'type'];

    public function form() { return $this->belongsTo(Form::class); }
}
