<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $cus = Customer::all(); //eloquent ORM
        return view('customer.index',compact('nomor','cus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cus = new Customer;
        $cus->nama_customer = $request->nama_customer;
        $cus->alamat_customer = $request->alamat_customer;
        $cus->telp_customer = $request->telp_customer;
        $cus->save();

        return redirect('/customer/');
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
        $cus = Customer::find($id);
        return view('customer.edit',compact('cus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cus = Customer::find($id);
        $cus->nama_customer = $request->nama_customer;
        $cus->alamat_customer = $request->alamat_customer;
        $cus->telp_customer = $request->telp_customer;
        $cus->save();

        return redirect ('/customer/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cus = Customer::find($id);
        $cus->delete();

        return redirect('/customer/');
    }
    
}
