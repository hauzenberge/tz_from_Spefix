<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('images', 'public');
        }
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        // Видалення файлу зображення
        if (File::exists(public_path('storage/' . $product->image))) {
            File::delete(public_path('storage/' . $product->image));
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
