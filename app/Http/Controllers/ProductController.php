<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function insert(Request $request)
    {

        $product = new Product;

        $product->name = $request->nombre;
        $product->price = $request->precio;

        $product->save();

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $products = Product::all();
        return view('products',['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request)
    {
        Product::where('id', $request->id)
      ->update(['name'=>$request->nombre,'price' => $request->precio]);
      return redirect('/products');
    }

    /**
     * Update the specified resource in storage.
     */
    public function delete(Request $request)
    {
        $product = Product::find($request->id);

        $product->delete();
        $products = Product::all();
        return view('products',['products' => $products]);
    }
    public function filter(Request $request){
        $products = Product::where('name', $request->nombre)
               ->take(10)
               ->get();
        return view('products',['products' => $products]);

    }
}
