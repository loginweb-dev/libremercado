<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductDetail extends Model
{
    use SoftDeletes;
    protected $table = 'product_details';
    protected $fillable = ['type', 'code', 'title', 'price', 'price_last', 'stock', 'product_id', 'published', 'default'];
}
