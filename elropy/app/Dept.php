<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    protected $fillable = ['user_id', 'value'];

    public function user_id() {
      return $this->belongsTo(App\User);
    }
}
