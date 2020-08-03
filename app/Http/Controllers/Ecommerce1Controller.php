<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SubCategory;
class Ecommerce1Controller extends Controller
{
    //

    //  ----------- Function Static------------------------------
    //-----------------------------------------------------------
    static function recomments() //recomments
    {
        $products = Product::where([['published', true], ['block', 'recomments']])->with(['product_details'])->orderBy('updated_at', 'desc')->limit(8)->get();
        return $products;
    }

    static function categories() // categories
    {          
        $products = SubCategory::with(['products'])->where('block', 'categories')->orderBy('updated_at', 'desc')->limit(3)->get();
        return $products;
    }

    static function moda() //
    {
        $products =Product::where([['published', true], ['block', 'moda']])->with(['product_details'])->orderBy('updated_at', 'desc')->limit(4)->get();
        return $products;
    }

    static function sales() // Sales
    {
        $products = SubCategory::with(['products'])->where('block', 'sales')->orderBy('updated_at', 'asc')->limit(3)->get();
        return $products;
    }

    static function last() //last
    {
        $products = Product::where('published', true)->orderBy('updated_at', 'desc')->paginate(4);
        return $products;
    }

}
