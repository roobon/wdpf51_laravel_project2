<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(20);
        $cats = Category::orderBy('cat_name', 'ASC')->get();
        //$data['products'] = Product::orderBy('id', 'DESC')->get();
        //$products = Product::orderBy('id', 'DESC')->get();
        return view("backend.product.index", compact('products', 'cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('cat_name', 'ASC')->get();
        return view("backend.product.create", compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'product_name' => 'required',
            'product_details' => 'min:5|max:200',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_stock' => 'required'
        ]);
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_details = $request->product_details;
        $product->product_price = $request->product_price;
        $product->product_category = $request->product_category;
        $product->product_stock = $request->product_stock;
        $product->product_image = $request->product_image;
        $product->save();
        return redirect('products')->with('msg', "Product Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
