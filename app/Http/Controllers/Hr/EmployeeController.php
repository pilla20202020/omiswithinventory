<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Models\Hr\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        dd($employee);
        return view('omis.hr.employee.index', compact('$employee'));
    }

    public function create()
    {
        return view('omis.hr.employee.create');
    }
}
