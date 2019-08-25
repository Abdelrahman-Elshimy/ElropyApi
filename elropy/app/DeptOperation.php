<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeptOperation extends Model
{
    protected $fillable = ['value', 'client_id', 'remain'];

    public function client() {
      return $this->belongsTo(Client::class);
    }
}
