<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        $products = Product::latest()->paginate(9);
        return view('home.shoppage', compact('products'), [
            "title" => "Products",
            "active" => "shop",
        ])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.Products', compact('products'), [
            "title" => "Products",
            "active" => "shop",
        ])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.compt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cret = $request->validate([
            "name" => "required",
            "details" => "required",
            "harga" => "required",
            "deskrip" => "require",
        ]);
        Product::create($cret);
        return redirect()->intended('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return view('home.product', [
            "title" => "Shop Detail",
            "active" => "shop",
            "product" => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        return view('admin.compt.edit', compact('products'));
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
        $edit = $request->validate([
            "name" => "required",
            "details" => "required",
            "harga" => "required",
            "deskrip" => "require",
        ]);
        Product::update($edit);
        return redirect()->intended('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::delete();

        return redirect()->route('/products')->with('success', 'Delete Complete');
    }
}
