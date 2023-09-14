<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'ASC')->paginate(4);

        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category_name= DB::table('categories')->select('category_name','id')->get();
        return view('products.create', compact('category_name'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('products')->with('success', 'Item added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $category_name= DB::table('categories')->select('category_name')->get();

        return view('products.show', compact('product','category_name'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $category_name= DB::table('categories')->select('category_name')->get();

        return view('products.edit', compact('product','category_name'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('products')->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products')->with('success', 'Item deleted successfully');
    }
}
