<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = ['title','slug','image','description'];

    public function subcategories(){
        return $this->hasMany('App\SubCategory', 'category_id');
    }
}
