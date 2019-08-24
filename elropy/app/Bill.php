<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['user_id', 'value', 'buyed', 'depts_value'];

    public function user_id() {
      return $this->belongsTo(App\User);
    }
}
