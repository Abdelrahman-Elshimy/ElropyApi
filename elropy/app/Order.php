<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'client_id', 'bill_id', 'unit_count', 'unit_price','box_count', 'box_price',
    'container_count', 'container_price','price'];

    public function client() {
      return $this->belongsTo(Client::class);
    }

    public function bill() {
      return $this->belongsTo(Bill::class);
    }

}
