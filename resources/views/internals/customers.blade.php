<h1>List Customers</h1>


<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1>Active</h1>
            <ul>
                @foreach($activeCustomers as $active)
                    <li>{{$active->name}}({{$active->company->name}})</li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-6">
            <h1>InActive</h1>
            <ul>
                @foreach($inactiveCustomers as $inactive)
                    <li>{{$inactive->name}}({{$inactive->company->name}})</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        @foreach($companies as $comany)
            <div class="col-sm-6">
                <h1>{{$comany->name}}</h1>
                <ul>
                    @foreach($comany->customers as $customer)
                        <li>{{$customer->name}}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>

