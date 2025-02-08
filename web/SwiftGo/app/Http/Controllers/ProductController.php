<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Product::get();
        return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "product_name"=>"required | unique:category",
                "product_mpic"=>"required",
                "product_pic"=>"required"
            ]
        );
        //Img code

        $mainimgName="product_mainpic_".time().".".$request->product_mpic->extension();
        $pimgName="product_pic_".time().".".$request->product_pic->extension();
        $request->product_mpic->move(public_path('img'),$mainimgName,$pimgName);

         //insert code
        $product=new Product();
        $product->product_name=$request->product_name;
        $product->product_type=$request->product_type;
        $product->product_sp=$request->product_sp;
        $product->product_cp=$request->product_cp;
        $product->product_qty=$request->product_qty;
        $product->order_type=$request->order_type;
        $product->product_dis=$request->product_dis;
        $product->product_expiryDate=$request->product_expiryDate;
        $product->returnPolicy=$request->returnPolicy;
        $product->status=$request->status;
        $product->product_desc=$request->product_desc;
        $product->product_date=$request->product_date;
        $product->product_time=$request->product_time;
        $product->product_mpic=asset('img')."/".$mainimgName;
        $product->product_pic=asset('img')."/".$pimgName;
        $product->save();

        return redirect("product")->withSuccess("Insert successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view("product.edit",compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate(
            [
                "product_name"=>"required",
                
            ]
        );
        //Img code
        $table=Product::find($product->_id);
        if(isset($request->product_mpic)){
            $mainimgName="product_mainpic_".time().".".$request->product_mpic->extension();
            $pimgName="product_pic_".time().".".$request->product_pic->extension();
            $request->product_mpic->move(public_path('img'),$mainimgName,$pimgName);
            $table->product_mpic=asset('img')."/".$mainimgName;
            $table->product_pic=asset('img')."/".$pimgName;
        }
      

         //insert code
        $table->product_name=$request->product_name;
        
        $table->save();

        return redirect("product")->withSuccess("Updated successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect("product")->withSuccess("Deleted successfully!!!");
    }
}
