<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'address', 'mobile'];

    public function dept() { 
    	return $this->hasMany(Dept::class);
    }
    public function deptOperation() { 
    	return $this->hasMany(DeptOperation::class);
    }
}
