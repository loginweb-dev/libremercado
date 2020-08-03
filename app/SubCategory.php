<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SubCategory extends Model
{
    use SoftDeletes;
    protected $table = 'sub_categories';
    protected $fillable = ['title', 'description', 'category_id', 'block'];

    public function products(){
        return $this->hasMany('App\Product', 'sub_category_id');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
}
