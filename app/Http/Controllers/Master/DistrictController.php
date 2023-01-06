<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\District;
        use Illuminate\Support\Facades\DB;
        class DistrictController extends Controller
        {        
           public function index()
            {
                $data = District::where('status','<>',-1)->get();
                return view("omis.master.district.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.district.create");
            }
        
            public function store(Request $request)
            {
                District::create($request->all());
                return redirect()->route('master.district.index')->with('success','The District created Successfully.');
            }
        
            public function show($id)
            {
                $data = District::findOrFail($id);
                return view("omis.master.district.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = District::findOrFail($id);
                return view("omis.master.district.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = District::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.district.index')->with('success','The District updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = District::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The District Deleted Successfully.'],200);
            }
        }
        