<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studant extends Model
{
    //
    protected $fillable = [
        "id_user","id_school","photo","alias","use_alias","birthdate","class_name","current_year"
    ];

}
