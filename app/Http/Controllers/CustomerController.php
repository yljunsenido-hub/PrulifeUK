<?php

namespace App\Http\Controllers;

use App\Imports\CustomerImport;
use Illuminate\Http\Request;
use App\Models\Customer;

use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function index (){
        $customers = Customer::all();
        return view('Customer', compact('customers'));
    }

    public function importExcelData(Request $request){
        $request->validate([
            'import-file'=>[
                'required',
                'file'
            ],
        ]);

        Excel::import(new CustomerImport, $request->file('import-file'));

        return redirect()->back()->with('status', 'Imported Successfully');
    }
}
