<?php

namespace App\Http\Controllers;


use App\Models\ProductsFeatures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products_features')->get();
        return view('admin.products_features.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productsNames = DB::table('products')->get();
        return view('admin.products_features.create',compact('productsNames'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new ProductsFeatures();
        $products->name = request('name');
        $products->description = request('description');

        $products->product_id = request('product_id');
        $products->save();

        $productsSave = $products->save();
        if($productsSave) {
            return redirect('adminProductsFeatures')->with("status", "The record has been stored");
        } else {
            return redirect('adminProductsFeatures')->with("error", "There is an error");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductsFeatures  $productsFeatures
     * @return \Illuminate\Http\Response
     */
    public function show(ProductsFeatures $productsFeatures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductsFeatures  $productsFeatures
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = ProductsFeatures::find($id);
        $productsNames = DB::table('products')->get();
        return view('admin.products_features.edit', compact('products','productsNames'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductsFeatures  $productsFeatures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products= ProductsFeatures::find($id);
        $products->name = request('name');
        $products->description = request('description');
        $products->product_id = request('product_id');

        $products->save();
        $productsSave = $products->save();
        if($productsSave) {
            return redirect('adminProductsFeatures')->with("status", "The record has been updated");
        } else {
            return redirect('adminProductsFeatures')->with("error", "There is an error");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductsFeatures  $productsFeatures
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = ProductsFeatures::find($id)->delete();
        return redirect('adminProductsFeatures')->with('status','Deleted Successfully');
    }
}
