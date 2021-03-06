<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Facades\Voyager;
use App\Page;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::where('id', $id)->first(); 
        $dataType = Voyager::model('DataType')->where('slug', '=', 'pages')->first();
        return view('vendor.pages.edit', [
            'page' => $page,
            'dataType' => $dataType
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::where('id', $id)->first();
        $page->name = $request->name;
        $page->slug = Str::slug($request->name);
        $page->direction = $request->direction;
        $page->description = $request->description;
        if($request->hasFile('image')){
         
            $image=Storage::disk('public')->put('pages/'.date('F').date('Y'), $request->file('image'));
            // return $image;
            $page->image = $image;
        }
        $mijson = $page->details;
        if ($mijson) {
            foreach(json_decode($page->details, true) as $item => $value)
            {
                if($value['type'] == 'image')
                {
                  
                    $mijson = str_replace($value['value'], $value['value'], $mijson);
                }else{
                    if($value['type'] == 'space')
                    {
                    }else
                    {
                        $mijson_aux = json_decode($mijson, true);
                        $mijson_aux[$value['name']]['value'] = $request[$value['name']];
                        $mijson = json_encode($mijson_aux);
                        // $mijson = str_replace($value['value'], $request[$value['name']], $mijson);
                    }
                }
                if($request->hasFile($value['name']))
                {
                    $dirimage = Storage::disk('public')->put('pages/'.date('F').date('Y'), $request->file($value['name']));
                    $mijson = str_replace($value['value'], $dirimage, $mijson);
                }
               
            }
            // return $mijson;
            $page->details = $mijson;
        }
   
        $page->save();
        
        return back()->with([
            'message'    => 'Pagina Actualizada - '.$page->name,
            'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
