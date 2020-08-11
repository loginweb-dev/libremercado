<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Delivery extends Model
{
    use SoftDeletes;
    protected $table = 'deliveries';
    protected $fillable = ['price_shipping', 'day_delivery', 'hour_delivery', 'product_id', 'region_id'];
}
