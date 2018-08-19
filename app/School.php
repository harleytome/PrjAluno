<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
        "id","name","address","num","zip",
        "complement",
        "principal_name","phone","created_at",
        "timestamp","updated_at"
    ];

    protected $tablename = "schools";
}
