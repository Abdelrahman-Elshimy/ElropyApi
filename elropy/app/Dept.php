<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    protected $fillable = ['value', 'client_id'];
    
    public function client() {
      return $this->belongsTo(Client::class);
    }
}
