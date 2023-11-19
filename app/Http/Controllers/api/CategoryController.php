<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories =DB::table('category')       
        ->select('category.*')
        ->get();
        return json_encode(['categories' => $categories]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();       
        $category ->name = $request->name;
        $category ->description =$request->description;
        $category->save();       
        return json_encode(['category'=>$category]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);   
        return json_encode(['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);        
        $category->name = $request->name;       
        $category->description =$request->description;
        $category->save();       
         return json_encode(['category'=>$category]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);        
        $category->delete();         
        $categories = DB::table('category')        
        ->select('category.*')
        ->get();
        return json_encode(['categories'=>$categories, 'success'=> true]);
    }
}
