<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeptOperation extends Model
{
  protected $fillable = ['user_id', 'value', 'remain'];

  public function user_id() {
    return $this->belongsTo(App\User);
  }
}
