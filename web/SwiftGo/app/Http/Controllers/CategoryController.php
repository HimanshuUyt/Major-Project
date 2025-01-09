<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Category::get();
        return view('category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "category_name"=>"required | unique:category",
                "category_pic"=>"required"
            ]
        );
        //Img code

        $imgName="category_".time().".".$request->category_pic->extension();
        $request->category_pic->move(public_path('img'),$imgName);

         //insert code
        $category=new category();
        $category->category_name=$request->category_name;
        $category->category_pic=asset('img')."/".$imgName;
        $category->save();

        return redirect("category")->withSuccess("Insert successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        return view("category.edit",compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate(
            [
                "category_name"=>"required",
                
            ]
        );
        //Img code
        $table=category::find($category->_id);
        if(isset($request->category_pic)){
            $imgName="category_".time().".".$request->category_pic->extension();
            $request->category_pic->move(public_path('img'),$imgName);
            $table->category_pic=asset('img')."/".$imgName;
        }
      

         //insert code
        $table->category_name=$request->category_name;
        
        $table->save();

        return redirect("category")->withSuccess("Updated successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect("category")->withSuccess("Deleted successfully!!!");
    }
}
