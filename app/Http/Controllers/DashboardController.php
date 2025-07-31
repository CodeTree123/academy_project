<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $pageTitle = "Dashboard";

        return view('dashboard.index',compact('pageTitle'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required',
        ]);

        $customer = new Customer();

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;

        $customer->save();

        return back();
    }

    public function listCustomer()
    {
        $pageTitle = "Customer List";

        $customers = Customer::latest()->paginate(10);

        return view('Customer.list',compact('pageTitle','customers'));
    }

    public function editCustomer($id)
    {
        $edit = Customer::findOrFail($id);

        return view('Customer.edit',compact('edit'));
    }

    public function editPostCustomer(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;

        $customer->save();

        return redirect()->route('list.customer');
    }

    public function deleteCustomer($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('list.customer');
    }
}
