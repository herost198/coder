<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customers.index',[
            'customers'=>$customers,

        ]);
    }

    public function create(){
        $companies =  Company::all();
        $customer = new Customer();
        return view('customers.create',compact(['companies','customer']));
    }

    public function store(){
        Customer::create($this->validateRequest());
//        $customer = new Customer();
//        $customer->name = request('name');
//        $customer->email = request('email');
//        $customer->active = request('active');
//        $customer->save();
        return redirect('customers');
    }

    public function show(Customer $customer){
//        $customer = Customer::findorFail($customer);
//        dd($customer);

        return view('customers.show',compact('customer'));
    }

    public function edit(Customer $customer){
        $companies = Company::all();
        return view('customers.edit',compact(['customer','companies']));
    }

    public function update(Customer $customer){

        $customer->update($this->validateRequest());
        return redirect('customers/'.$customer->id);
    }

    public function destroy(Customer $customer){
    	$customer->delete();
			return redirect('customers');
		}

    public function validateRequest(){
      return request()->validate([
        'name'=>'required',
        'email'=>'required',
        'active'=>'required',
        'company_id'=>'required'
      ]);
    }
}
