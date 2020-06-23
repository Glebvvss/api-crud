<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function setFirstNameAttribute($value)
    {
        return Str::title($value);
    }

    public function setLastNameAttribute($value)
    {
        return Str::title($value);
    }
}
