<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $fillable = ['value', 'buyed', 'depts_value', 'client_id'];

  public function client() {
    return $this->belongsTo(Client::class);
  }

}
