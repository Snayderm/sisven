<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paymode;
use Illuminate\Support\Facades\DB;

class PaymodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //$categories = Category::all();      
       $paymodes =DB::table('paymodes')       
       ->select('paymodes.*')
       ->get();
       return view("paymode.index",['paymodes' => $paymodes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paymodes = DB::table('paymodes')        
        ->get();
        return view('paymode.new',['paymodes'=>$paymodes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paymode = new Paymode();
        //$customer ->id = $request -> id; este campo se inhabilito debido a que estaba ocasionando que la base de datos autoincrementara de 2 en 2 en lugar de 1 en 1. 
        $paymode ->name =$request->name;
        $paymode ->observation =$request->observation;        
        $paymode->save();

        $paymodes = DB::table('paymodes')       
        ->select('paymodes.*') 
        ->get();
        return view('paymode.index',['paymodes'=>$paymodes]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paymode = Paymode::find($id);
        $paymode = DB::table('paymodes')        
        ->get();
        return view('paymode.edit',['paymode'=>$paymode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paymode = Paymode::find($id);
        //$category->id = $request->id; no va id porque este campo no se puede editar
        $paymode->name = $request->name;
        $paymode->observation = $request->observation;             
        $paymode->save();
 
        $paymodes = DB::table('paymodes')       
        ->select('paymodes.*')
        ->get();
         return view('paymode.index',['paymodes'=>$paymodes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paymode = Paymode::find($id);        
        $paymode->delete();        
        
        $paymodes = DB::table('paymodes')        
        ->select('paymodes.*')
        ->get();
        return view('paymode.index',['paymodes'=>$paymodes]);
    }
}