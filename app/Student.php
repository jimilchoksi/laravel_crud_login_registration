<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'name','address','telephone_number','mobile_number','school_name','class','medium','birthdate','admission_date'
    ];
}
