<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Employee;
        use Illuminate\Support\Facades\DB;
        class EmployeeController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_employee');
                // $data['TableRows'] = DB::select('select * from tbl_employee');
                $data = Employee::all();
                return view("omis.master.employee.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.employee.create");
            }
        
            public function store(Request $request)
            {
                Employee::create($request->all());
                return redirect()->route('master.employee.index')->with('success','The Employee created Successfully.');
            }
        
            public function show($id)
            {
                $data = Employee::findOrFail($id);
                return view("omis.master.employee.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Employee::findOrFail($id);
                return view("omis.master.employee.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Employee::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.employee.index')->with('success','The Employee updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Employee::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.employee.index')->with('success','The Employee Soft deleted Successfully.');
            }
        }
        