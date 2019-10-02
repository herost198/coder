<form action="{{url('customers')}}" method="post">
    @csrf
    @include('customers.form')
{{--    <div class="form-group">--}}
{{--        <label for="">Name</label>--}}
{{--        <input type="text" name="name" value="{{old('name')}}">--}}
{{--    </div>--}}
{{--    {{$errors->first('name')}}--}}
{{--    <div class="form-group">--}}
{{--        <label for="">Email</label>--}}
{{--        <input type="text" name="email" value="{{old('email')}}">--}}
{{--    </div>--}}
{{--    {{$errors->first('email')}}--}}
{{--    <div class="form-group">--}}
{{--        <label for="">Status</label>--}}
{{--        <select name="active" id="active" class="form-control">--}}
{{--            <option value="" disabled>Select customer status</option>--}}
{{--            <option value="1">Active</option>--}}
{{--            <option value="0">Inactive</option>--}}

{{--        </select>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="">Company</label>--}}
{{--        <select name="company_id" id="conpany_id" class="form-control">--}}
{{--            @foreach($companies as $company)--}}
{{--                <option value="{{$company->id}}">{{$company->name}}</option>--}}
{{--            @endforeach--}}
{{--            --}}{{--            <option value="1">Active</option>--}}
{{--            --}}{{--            <option value="0">Inactive</option>--}}

{{--        </select>--}}
{{--    </div>--}}
    <button type="submit">Thêm mới</button>
</form>