<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'job_description', 'cnum', 'email', 'address',
    ];
}
