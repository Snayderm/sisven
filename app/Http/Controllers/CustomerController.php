<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //$categories = Category::all();      
       $customers =DB::table('customers')       
       ->select('customers.*')
       ->get();
       return view("customers.index",['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = DB::table('customers')        
        ->get();
        return view('customers.new',['customers'=>$customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        //$customer ->id = $request -> id; este campo se inhabilito debido a que estaba ocasionando que la base de datos autoincrementara de 2 en 2 en lugar de 1 en 1. 
        $customer ->document_number =$request->document_number;
        $customer ->first_name =$request->first_name;
        $customer ->last_name =$request->last_name;
        $customer ->address =$request->address;
        $customer ->birthday =$request->birthday;
        $customer ->phone_number =$request->phone_number;
        $customer ->email =$request->email;
        $customer->save();

        $customers = DB::table('customers')       
        ->select('customers.*') 
        ->get();
        return view('customers.index',['customers'=>$customers]);
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
        $customer = Customer::find($id);
        $customers = DB::table('customers')        
        ->get();
        return view('customers.edit',['customer'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);
        //$category->id = $request->id; no va id porque este campo no se puede editar
        $customer->document_number = $request->document_number;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;        
        $customer->save();
 
        $customers = DB::table('customers')       
        ->select('customers.*')
        ->get();
         return view('customers.index',['customers'=>$customers]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);        
        $customer->delete();        
        
        $customers = DB::table('customers')        
        ->select('customers.*')
        ->get();
        return view('customers.index',['customers'=>$customers]);
    }
}
