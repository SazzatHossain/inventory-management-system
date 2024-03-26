<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|unique:products',
            'category_id' => 'required|exists:categories,id',
            'cost' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'brand_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        // Store the product in the database
        $product = Product::create($validatedData);

        // Optionally, you can redirect the user to a specific page
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

}
