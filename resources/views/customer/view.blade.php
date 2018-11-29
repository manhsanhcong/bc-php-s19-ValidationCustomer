@extends('home')

@section('content')

    <a class="navbar-brand">My Customer</a>
    <p>
        <a href="{{route('customer.index')}}" class="btn btn-default">Return to customer</a>
    </p>

    <h1>{{ $customer->customer_code }}</h1>
    <p>{{ $customer->name }}</p>
    <p>{{ $customer->email }}</p>
    <p>{{ $customer->address }}</p>
    <p>{{ $customer->phone }}</p>

@endsection