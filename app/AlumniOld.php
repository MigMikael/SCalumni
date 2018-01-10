<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumniOld extends Model
{
    protected $table = "alumni_old";
    public $timestamps = true;
    protected $fillable = [
        'code',
        'sc',
        'first_name',
        'last_name',
        'major',
        'address',
        'email',
        'tel',
        'jobs',
        'position'
    ];
}
