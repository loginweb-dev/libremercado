<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Block;
use App\Page;
use App\User;
use App\Product;
use App\Region;
use App\Delivery;
class FrontEndController extends Controller
{
    function default()
    {

        $page = setting('site.page');
        $collection = Page::where('slug', $page)->first();
        
        if($collection){
            $blocks = Block::where('page_id', $collection->id)->orderBy('position', 'asc')->get();
            return view($collection->direction, [
                'collection' => json_decode($collection->details, true),
                'page' => $collection,
                'blocks'     => $blocks
            ]);
        }else{
            return view('welcome');
        }
        
    }
    public function pages($slug)
    {
        $collection = Page::where('slug', $slug)->first();
        // return $collection;
        $blocks = Block::where('page_id', $collection->id)->orderBy('position', 'asc')->get();
        // return $blocks;
        return view($collection->direction, [
            'collection' => json_decode($collection->details, true),
            'page' => $collection,
            'blocks'     => $blocks
        ]);
    }

    //----------------- Product--------------
    //-----------------------------------
    function product_view($product_id)
    {
        $product = Product::find($product_id);
        $product->views = $product->views + 1;
        $product->save();
        return $product;
    }
    function product_stars($product_id, $stars)
    {
        $product = Product::find($product_id);
        $product->stars = $stars;
        $product->save();
        return $stars;
    }

    

    //------------Carrito AJAX----------------------------------------------------
      //-------------------------------------------------------------
      function addcart($slug, $detail)
      {
          $product = Product::with(['product_details'])->where('slug', $slug)->first();
          $datail = ProductDetail::find($detail);
          \Cart::add(
              $datail->id, 
              $product->name, 
              $datail->price, 
              1, 
              array(
                  'slug' => $product->slug, 
                  'images' => $product->images,
                  'description' => $product->description, 
                  'offer' => $product->offer ? 1 : 0, 
                  'type' => $datail->type, 
                  'title' => $datail->title, 
                  'code' => $datail->code, 
                  'price_last' => $datail->price_last, 
                  'stock' => $datail->stock),
              array()
          );
          return $product;
  
      }

      function subtractcart($slug, $detail)
      {
          
          $product = Product::with(['product_details'])->where('slug', $slug)->first();
          \Cart::update($detail, array(
            'quantity' => -1, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
          ));
          return $product;
  
      }

      function removecart($slug, $detail)
      {
          $product = Product::with(['product_details'])->where('slug', $slug)->first();
          \Cart::remove($detail);
          return $product;
      }
  
      function productdetails($id)
      {
          $product_details = ProductDetail::find($id);
          return $product_details;
  
      }

    function update_bussiness(Request $request)
    {
        // $custumer = \App\Customer::where('user_id', Auth::user()->id)->first();
        // $custumer->name_bussiness = $request->name_bussiness;
        // $custumer->nit_ci = $request->nit_ci;
        // $custumer->address = $request->address;
        // if($request->file('banner')){
        //     $image=Storage::disk('public')->put('bg_customer/'.date('F').date('Y'), $request->file('banner'));
        //     $custumer->banner = $image;
        // }
        // $custumer->save();
        // return $custumer;
    }

    function save_location(Request $request)
    {
        // $customer = \Modules\Bimgo\Entities\BgCustomer::where('user_id', Auth::user()->id)->first();
        
        // \Modules\Bimgo\Entities\BgLocation::create([
        //     'type' => $request->references,
        //     'default' => $request->default ? 1 : 0,
        //     'address' => $request->address,
        //     'region_id' => $request->regions,
        //     'customer_id' => $customer->id,
        //     'latitud' => $request->latitud,
        //     'longitud' => $request->longitud
        // ]);
        // return back();
    }

    function regions_get($id)
    {
        $region = Region::find($id);
        return response()->json($region);
    }

    function delivery_get($region_id)
    {

        $delivery = Delivery::where('region_id', $region_id)->first();
        return response()->json($delivery);
    }

}
