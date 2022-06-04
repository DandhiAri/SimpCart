<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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
        $categories = Category::all();
        return view('home.shoppage', compact('products', 'categories'), [
            "title" => "Products",
            "active" => "shop",
        ])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function home()
    {
        $products = Product::latest()->paginate(4);
        return view('dashboard', compact('products'), [
            "title" => "WELCOME",
            "active" => "home",
        ])
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    //==============================RESOURCE==========================//

    public function index()
    {
        $products = Product::latest()->paginate(10);
        $categories = Category::all();
        return view('admin.Products', compact('products', 'categories'), [
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
            "product" => $product,
        ]);
    }
    public function cat()
    {
        return view('categories', [
            'title' => "",
            'catgories' => Category::all(),
        ]);
    }
    public function catslug(Category $category)
    {
        return view('home.shoppage', [
            'title' => $category->name,
            // 'product' => $category->products,
            'products' => $category->product->load('product')
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
