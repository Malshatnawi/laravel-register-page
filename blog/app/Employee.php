<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['email' , 'mobile', 'password', 'fullname'];

    protected $primaryKey = 'employee_id';
}
