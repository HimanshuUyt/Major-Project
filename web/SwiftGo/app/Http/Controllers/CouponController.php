<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Coupon::paginate(5);
        return view('coupon.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $table = new Coupon();
        //cat123.jpg
        $imgName = "coupon_" . time() . "." . $request->c_pic->extension();
        $request->c_pic->move(public_path('images'), $imgName);

        $table->c_code = $request->c_code;
        $table->c_desc = $request->c_desc;
        $table->c_discount = $request->c_discount;
        $table->c_max_amt = $request->c_max_amt;

        $table->c_pic = $imgName;

        if (strcmp($request->status, "on") == 0) {
            $table->status = true;
        } else {
            $table->status = false;
        }

        $table->save();

        return redirect('coupon')->withSuccess("Inserted Successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        //
        return view('coupon.show', compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        //
        return view('coupon.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
        //

        $table = Coupon::find($coupon->_id);
        //cat123.jpg

        if (isset($request->c_pic)) {
            $imgName = "coupon_" . time() . "." . $request->c_pic->extension();
            $request->c_pic->move(public_path('images'), $imgName);
            $table->c_pic = $imgName;
        }


        $table->c_code = $request->c_code;
        $table->c_desc = $request->c_desc;
        $table->c_discount = $request->c_discount;
        $table->c_max_amt = $request->c_max_amt;


        if (strcmp($request->status, "on") == 0) {
            $table->status = true;
        } else {
            $table->status = false;
        }

        $table->save();

        return redirect('coupon')->withSuccess("Updated Successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        //
        $coupon->delete();
        return redirect('coupon')->withSuccess("Deleted Successfully!!!");
    }
}