<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name', 'unit_count', 'unit_price',
    'box_count', 'box_price', 'container_count', 'container_price'
];
}
