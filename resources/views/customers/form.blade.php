<div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" value="{{old('name')?? $customer->name }}">
</div>
{{$errors->first('name')}}
<div class="form-group">
  <label for="">Email</label>
  <input type="text" name="email" value="{{old('email')??  $customer->email}}">
</div>
{{$errors->first('email')}}
<div class="form-group">
  <label for="">Status</label>
  <select name="active" id="active" class="form-control">
    <option value="" disabled>Select customer status</option>
    @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
      <option value="{{$activeOptionKey}}" {{$customer->active ==$activeOptionValue ? 'selected': ''}} >{{$activeOptionValue}}</option>

    @endforeach

  </select>
</div>
<div class="form-group">
  <label for="">Company</label>
  <select name="company_id" id="conpany_id" class="form-control">
    @foreach($companies as $company)
      <option value="{{$company->id}}"
        {{$company->id == $customer->company_id ? 'selected' : ''}}

      >{{$company->name}}</option>--}}
    @endforeach


  </select>
</div>