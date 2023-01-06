<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Department;
        use Illuminate\Support\Facades\DB;
        class DepartmentController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_department');
                // $data['TableRows'] = DB::select('select * from tbl_department');
                $data = Department::all();
                return view("omis.master.department.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.department.create");
            }
        
            public function store(Request $request)
            {
                Department::create($request->all());
                return redirect()->route('master.department.index')->with('success','The Department created Successfully.');
            }
        
            public function show($id)
            {
                $data = Department::findOrFail($id);
                return view("omis.master.department.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Department::findOrFail($id);
                return view("omis.master.department.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Department::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.department.index')->with('success','The Department updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Department::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.department.index')->with('success','The Department Soft deleted Successfully.');
            }
        }
        
        