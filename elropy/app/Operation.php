<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
  protected $fillable = [
      'name', 'unit_count', 'unit_price',
      'box_count', 'box_price', 'container_count', 'container_price', 'user_id', 'bill_id', 'price'
  ];

  public function user_id() {
    return $this->belongsTo(App\User);
  }

  public function bill_id() {
    return $this->belongsTo(App\Bill);
  }
}
