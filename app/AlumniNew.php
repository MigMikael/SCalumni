<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumniNew extends Model
{
    protected $table = "alumni_new";
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
        'position',
        'is_edit',
        'is_approve'
    ];
}
