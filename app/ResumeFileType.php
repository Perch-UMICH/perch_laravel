<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeFileType extends Model
{
    protected $fillable = [
        'current',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function file() {
        return $this->belongsTo('App\File');
    }
}
