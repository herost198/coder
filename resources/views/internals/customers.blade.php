<h1>List Customers</h1>

<form action="" method="post">
        @csrf
        <div class="input-group">
                <input type="text" name="name">
        </div>
        {{$errors->first('name')}}
        <div class="input-group">
                <input type="text" name="email">
        </div>
        {{$errors->first('email')}}
        <button type="submit">Thêm mới</button>
</form>
<ul>

@foreach($customers as $customer)
        <li>{{$customer->name}}({{$customer->email}})</li>
@endforeach
</ul>
