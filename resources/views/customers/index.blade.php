@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>List Customers</h1>
            <a href="{{url('customer/create')}}">Add Customer</a>
        </div>
    </div>
    @foreach($customers as $customer)

        <div class="row">
            <div class="col-2">
                <a href="{{url('customers/'.$customer->id)}}"> {{$customer->id}}</a>

            </div>
            <div class="col-2">
                {{$customer->name}}
            </div>
            <div class="col-2">
                {{$customer->company->name}}
            </div>
            <div class="col-2">
                {{$customer->active}}
            </div>
        </div>
    @endforeach


    @endsection

