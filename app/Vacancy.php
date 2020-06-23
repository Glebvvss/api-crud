<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function setNameAttribute($value)
    {
        return Str::title($value);
    }

    public function setAboutAttribute($value)
    {
        return Str::trim($value);
    }
}
