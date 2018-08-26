<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studant extends Model
{
    //
    protected $fillable = [
        "id_user","id_school","photo","alias","use_alias","birthdate","class_name","current_year"
    ];

    protected $tablename = 'studants';

    /*
    Define os mutators
    */
    public function setClassNameAttribute($value)
    {
        $this->attributes['class_name'] = strtoupper($value);
    }
}
