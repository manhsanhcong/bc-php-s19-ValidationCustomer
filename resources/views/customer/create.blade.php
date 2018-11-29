@extends('home')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Create new customer</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('customer.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>customer_code</label>
                        <input type="text" name="customer_code" class="form-control"/>
                        @if($errors->has('customer_code'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('customer_code') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>name</label>
                        <textarea name="name" class="form-control"></textarea>
                        @if($errors->has('name'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email" class="form-control">
                        @if($errors->has('email'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>address</label>
                        <textarea name="address" class="form-control"></textarea>
                        @if($errors->has('address'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone" class="form-control"/>
                        @if($errors->has('phone'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection