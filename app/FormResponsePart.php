<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormResponsePart extends Model {
    protected $fillable = ['question', 'answer'];

    public function response() { return $this->belongsTo(FormResponse::class); }
}
