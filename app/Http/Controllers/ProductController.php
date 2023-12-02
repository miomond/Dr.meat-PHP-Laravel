<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; //add trip Model - Data is coming from the database via Model.

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        return view('Product.index')->with('product', $product);
    }

    public function dashboard()
    {
        $product = Product::all();
        return view ('Product.dashboard')->with('product', $product);
    }




    public function create()
    {
        return view('product.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
            $destinationPath = public_path('img');
            $file->move($destinationPath, $filename);
            $input['image'] = $filename;
        }
        Product::create($input);
        return redirect('Product')->with('flash_message', 'product Addedd!');
    }


    public function show(string $id)
    {
        $product = Product::find($id);
        return view('product.show')->with('product', $product);
    }


    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect()->route('Product.index')->with('flash_message', 'product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('Product')->with('flash_message', 'product deleted!');
    }
}
