<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Banner::get();
        return view('banner.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "banner_pic"=>"required"
            ]
        );
        //Img code

        $imgName="banner_".time().".".$request->banner_pic->extension();
        $request->banner_pic->move(public_path('img'),$imgName);

         //insert code
        $category=new banner();
        $category->banner_pic=asset('img')."/".$imgName;
        if(strcmp($request->status,"on")==0){
            $category->status=true;
        }else{
            $category->status=false;

        }
        $category->save();

        return redirect("banner")->withSuccess("Insert successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
        return view("banner.edit",compact('banner')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
        // $request->validate(
        //     [
        //         "banner_pic"=>"required",
                
        //     ]
        // );
        //Img code
        $table=banner::find($banner->_id);
        if(isset($request->banner_pic)){
            $imgName="banner_".time().".".$request->banner_pic->extension();
            $request->banner_pic->move(public_path('img'),$imgName);
            $table->banner_pic=asset('img')."/".$imgName;
        }
        if(strcmp($request->status,"on")==0){
            $table->status=true;
        }else{
            $table->status=false;

        }

        
        $table->save();

        return redirect("banner")->withSuccess("Updated successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
        $banner->delete();
        return redirect("banner")->withSuccess("Deleted successfully!!!");
    }
}
