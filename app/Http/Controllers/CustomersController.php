<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();

        return view('internals.customers',compact('customers'));
    }

    public function stored(){
        $data= request()->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->save();
        return back();

    }

}
