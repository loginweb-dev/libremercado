<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravelista\Comments\Commentable;

class Product extends Model
{
    use SoftDeletes;
    use Commentable;
    protected $table = 'products';
    protected $fillable = ['name', 'slug', 'description', 'sub_category_id', 'images', 'tags', 'user_id', 'description_long', 'characteristics', 'brand_id', 'offer', 'published', 'block', 'shortage'];

    // public function product_details(){
    //     return $this->hasMany('Modules\Bimgo\Entities\BgProductDetail', 'product_id');
    // }

    // public function regions()
    // {
    //     return $this->belongsToMany('Modules\Bimgo\Entities\BgRegion', 'bg_deliveries', 'product_id', 'region_id');
    // }
}
