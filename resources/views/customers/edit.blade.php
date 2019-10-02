@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{$customer->id}}</h1>


        </div>
    </div>
    <form action="{{url('customers/'.$customer->id)}}" method="post">
        @method("PATCH")
        @csrf
        @include("customers.form")

        <button type="submit">Sửa</button>
    </form>

@endsection