<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        // Retrieve all products and pass to the view
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function create()
    {
        // Logic to show the product creation form
        return view('products.create');
    }

    public function edit(Product $product)
    {
        // Logic to show the product edit form
        // return view('products.edit', compact('product'));
        return view('products.edit', ['product' => $product]);

    }
    public function store(Request $request){
       
        // return view('products.store');
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);
        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }
    public function update(Request $request, Product $product)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        // Update the product
        $product->update($data);

        // Redirect to the product index or show page
        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }
    public function destroy(Product $product)
    {
        // Delete the product
        $product->delete();

        // Redirect to the product index with a success message
        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
