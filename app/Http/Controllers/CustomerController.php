<?php

namespace App\Http\Controllers;

use App\CustomerModel;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = CustomerModel::all();
        return view('customer.list', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function view($id)
    {
        $customer = CustomerModel::findOrFail($id);
        return view('customer.view', compact('customer'));
    }

    public function store(CustomerRequest $request)
    {
        $customer = new CustomerModel();
        $customer->customer_code = $request->input('customer_code');
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->phone = $request->input('phone');
        $customer->save();

        Session::flash('success', 'Tạo mới thành công');
        return redirect()->route('customer.index');
    }

    public function update(CustomerRequest $request, $id)
    {
        $customer = CustomerModel::findOrFail($id);
        $customer->customer_code = $request->input('customer_code');
        $customer->name = $request->name;
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->phone = $request->input('phone');
        $customer->save();
        
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('customer.index');
    }

    public function edit($id)
    {
        $customer = CustomerModel::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function destroy($id)
    {
        $customer = CustomerModel::findOrFail($id);

        $customer->delete();

        return redirect()->route('customer.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('customer.index');
        }
        $customers = CustomerModel::where('name', 'LIKE', '%' . $keyword. '%')->get();

        return view('customer.list', compact('customers'));
    }
}

