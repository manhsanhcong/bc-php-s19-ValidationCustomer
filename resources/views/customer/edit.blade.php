@extends('home')

@section('content')
    <div class="col-12 col-md-12" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-12">
                <h1>Cập nhật Customer</h1>
            </div>
            <div class="col-12">
                <form method="post" action="">
                    @csrf
                    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
                    <div class="form-group">
                        <label>Customer_code</label>
                        <input type="text" name="customer_code" value="<?php echo $customer->customer_code; ?>"
                                  class="form-control"/>
                        @if($errors->has('customer_code'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('customer_code') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <textarea name="name" class="form-control"><?php echo $customer->name; ?></textarea>
                        @if($errors->has('name'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <textarea name="email" class="form-control"><?php echo $customer->email; ?></textarea>
                        @if($errors->has('email'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo $customer->address;?>"class="form-control"/>
                        @if($errors->has('address'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="<?php echo $customer->phone;?>" class="form-control"/>
                        @if($errors->has('phone'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('phone') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection