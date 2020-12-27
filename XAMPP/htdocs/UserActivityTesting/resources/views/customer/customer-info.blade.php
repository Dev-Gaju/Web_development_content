@extends('layouts.app')

@section('content')
<div class="container">
   <div class="col-sm-8 offset-2">
       <div class="card">
           <div class="card-header">
              <h3> List of Customers</h3>
           </div>
           @foreach ($customers as $customer)
                <div class="card-body">
                    {{$customer->name}}
                </div>

           @endforeach

       </div>
   </div>
</div>
@endsection
