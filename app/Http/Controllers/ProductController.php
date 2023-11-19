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
        $products = DB::table('products')
            ->select('products.*')
            ->get();
        return view("product.index", ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = DB::table('products')
            ->get();
        return view('product.new', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // Ajusta según los campos necesarios para tu modelo Product

        $product->save();

        $products = DB::table('products')
            ->select('products.*')
            ->get();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implementa según tus necesidades
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $products = DB::table('products')
            ->get();
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // Ajusta según los campos necesarios para tu modelo Product

        $product->save();

        $products = DB::table('products')
            ->select('products.*')
            ->get();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        $products = DB::table('products')
            ->select('products.*')
            ->get();
        return view('product.index', ['products' => $products]);
    }
}
