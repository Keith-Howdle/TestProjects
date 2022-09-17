<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Yajra\DataTables\Facades\DataTables;
// use Datatables;

class EmpController extends Controller
{
    //
    public function index()
    {
        return view('listing');
    }
    public function getEmployees(Request $request)
    {
        // dd ($request);
        if ($request->ajax()) {
            $data = Employee::latest()->get();
            // dd ($data);

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
