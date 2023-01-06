<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\ShiftRoster;
        use Illuminate\Support\Facades\DB;
        class ShiftRosterController extends Controller
        {        
           public function index()
            {
                $data = ShiftRoster::where('status','<>',-1)->get();
                return view("omis.hr.shiftroster.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.shiftroster.create");
            }
        
            public function store(Request $request)
            {
                ShiftRoster::create($request->all());
                return redirect()->route('hr.shiftroster.index')->with('success','The ShiftRoster created Successfully.');
            }
        
            public function show($id)
            {
                $data = ShiftRoster::findOrFail($id);
                return view("omis.hr.shiftroster.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = ShiftRoster::findOrFail($id);
                return view("omis.hr.shiftroster.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = ShiftRoster::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.shiftroster.index')->with('success','The ShiftRoster updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = ShiftRoster::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The ShiftRoster Deleted Successfully.'],200);
            }
        }
        