<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    protected $fillable = [
        "id_user","id_school","name","teacher"
    ];

    //Mutators
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = mb_strtoupper($value,'UTF-8');
    }
    // public function setTeacherAttribute($value)
    // {
    //     $this->attributes['teacher'] = strtoupper($value);
    // }

}
