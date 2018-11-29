<?php

use Illuminate\Database\Seeder;
use App\CustomerModel;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\CustomerModel();
        $customer->customer_code = '123';
        $customer->name = 'Nguyen Van A';
        $customer->email = '123@codegym.vn';
        $customer->address = 'Ha Noi';
        $customer->phone = '0865348862';
        $customer->save();

        $customer = new \App\CustomerModel();
        $customer->customer_code = '234';
        $customer->name = 'Nguyen Van B';
        $customer->email = '234@codegym.vn';
        $customer->address = 'Ha Noi';
        $customer->phone = '0569797352';
        $customer->save();

        $customer = new \App\CustomerModel();
        $customer->customer_code = '345';
        $customer->name = 'Nguyen Van C';
        $customer->email = '345@codegym.vn';
        $customer->address = 'Ha Noi';
        $customer->phone = '0527791862';
        $customer->save();

        $customer = new \App\CustomerModel();
        $customer->customer_code = '456';
        $customer->name = 'Nguyen Van D';
        $customer->email = '456@codegym.vn';
        $customer->address = 'Ha Noi';
        $customer->phone = '0888881882';
        $customer->save();
    }
}
