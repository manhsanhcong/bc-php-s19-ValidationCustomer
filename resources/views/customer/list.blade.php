@extends('home')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>My Customer</h1></div>
            <div class="col-6">
                <form class="navbar-form navbar-right" action="{{ route('customer.search') }}" method="get">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Search"
                                       value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-default">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer_code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                @if(count($customers) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($customers as $key => $customer)
                        <tr>
                            <th scope="row"{{++$key}}></th>
                            <td>{{$customer->customer_code}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->phone}}</td>

                            <td><a href="{{ route('customer.edit', $customer->id) }}">sửa</a></td>
                            <td><a href="{{ route('customer.destroy', $customer->id) }}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
            </table>
            <a class="btn btn-primary" href="{{ route('customer.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection