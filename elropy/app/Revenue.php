<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    protected $fillable = ['day_value', 'week_value', 'month_value'];
}
