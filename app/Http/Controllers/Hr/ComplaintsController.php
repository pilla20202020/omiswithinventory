<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Complaints;
        use Illuminate\Support\Facades\DB;
        class ComplaintsController extends Controller
        {        
           public function index()
            {
                $data = Complaints::where('status','<>',-1)->get();
                return view("omis.hr.complaints.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.complaints.create");
            }
        
            public function store(Request $request)
            {
                Complaints::create($request->all());
                return redirect()->route('hr.complaints.index')->with('success','The Complaints created Successfully.');
            }
        
            public function show($id)
            {
                $data = Complaints::findOrFail($id);
                return view("omis.hr.complaints.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Complaints::findOrFail($id);
                return view("omis.hr.complaints.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Complaints::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.complaints.index')->with('success','The Complaints updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Complaints::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Complaints Deleted Successfully.'],200);
            }
        }
        