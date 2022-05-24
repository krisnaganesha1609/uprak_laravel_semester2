<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Contracts\View\View;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products['products'] = Product::paginate(20);
        return view('layouts.pages.shop', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.pages.admin.admin_add_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        $image = $request->image;
        $imageHash = $image->hashName();
        $image->move(public_path('uploaded_img'), $imageHash);

        $products = new Product;
        $products->name = $request->name;
        $products->category = $request->category;
        $products->details = $request->details;
        $products->price = $request->price;
        $products->image = $imageHash;
        $products->save();

        return redirect('admin/products')->with('success', 'Successfully Adding New Products!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products['products'] = Product::find($id);
        return view('layouts.pages.view_product', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products['products'] = Product::find($id);
        return view('layouts.pages.admin.admin_update_products', $products);
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
        $image = $request->image;
        $imageHash = $image->hashName();
        $image->move(public_path('uploaded_img'), $imageHash);

        $products = Product::find($id);
        $products->name = $request->name;
        $products->category = $request->category;
        $products->details = $request->details;
        $products->price = $request->price;
        $products->image = $imageHash;
        $products->save();

        return redirect('admin/products')->with('success', 'Successfully Editing The Products!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('admin/products')->with('success', 'Successfully Deleting The Products');
    }
}
