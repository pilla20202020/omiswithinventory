<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Department;
        use Illuminate\Support\Facades\DB;
        class DepartmentController extends Controller
        {        
           public function index()
            {
                $data = Department::where('status','<>',-1)->get();
                return view("omis.hr.department.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.department.create");
            }
        
            public function store(Request $request)
            {
                Department::create($request->all());
                return redirect()->route('hr.department.index')->with('success','The Department created Successfully.');
            }
        
            public function show($id)
            {
                $data = Department::findOrFail($id);
                return view("omis.hr.department.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Department::findOrFail($id);
                return view("omis.hr.department.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Department::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.department.index')->with('success','The Department updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Department::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Department Deleted Successfully.'],200);
            }
        }
        