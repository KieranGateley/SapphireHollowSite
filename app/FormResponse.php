<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormResponse extends Model {

    protected $fillable = ['question', 'answer'];

    public function form() { return $this->belongsTo(Form::class); }

    public function questions() { return $this->hasMany(FormResponsePart::class); }

    public function user() { return $this->belongsTo(User::class); }
}
