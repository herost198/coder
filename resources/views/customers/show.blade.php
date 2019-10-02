@extends('layouts.layout')
@section('content')
        <h1>Details {{$customer->name}}</h1>
        <a href="{{url('customers/'.$customer->id.'/edit')}}">Edit</a>
        <form  action="{{url('customers/'.$customer->id)}}" method="post">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger">Delete</button>
        </form>
        <div class="row">
            <div class="col-2">
               {{$customer->name}}
            </div>
            <div class="col-2">
                {{$customer->email}}
            </div>
            <div class="col-2">
                {{$customer->company->name}}
            </div>
            <div class="col-2">
                {{$customer->active}}
            </div>
        </div>

    @endsection

