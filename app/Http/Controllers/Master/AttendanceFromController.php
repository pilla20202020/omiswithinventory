<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\AttendanceFrom;
        use Illuminate\Support\Facades\DB;
        class AttendanceFromController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_attendanceFrom');
                // $data['TableRows'] = DB::select('select * from tbl_attendanceFrom');
                $data = AttendanceFrom::all();
                return view("omis.master.attendancefrom.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.attendancefrom.create");
            }
        
            public function store(Request $request)
            {
                AttendanceFrom::create($request->all());
                return redirect()->route('master.attendancefrom.index')->with('success','The AttendanceFrom created Successfully.');
            }
        
            public function show($id)
            {
                $data = AttendanceFrom::findOrFail($id);
                return view("omis.master.attendancefrom.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = AttendanceFrom::findOrFail($id);
                return view("omis.master.attendancefrom.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = AttendanceFrom::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.attendancefrom.index')->with('success','The AttendanceFrom updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = AttendanceFrom::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.attendancefrom.index')->with('success','The AttendanceFrom Soft deleted Successfully.');
            }
        }
        