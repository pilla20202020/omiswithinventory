<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\JobTitle;
        use Illuminate\Support\Facades\DB;
        class JobTitleController extends Controller
        {        
           public function index()
            {
                $data = JobTitle::where('status','<>',-1)->get();
                return view("omis.master.jobtitle.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.jobtitle.create");
            }
        
            public function store(Request $request)
            {
                JobTitle::create($request->all());
                return redirect()->route('master.jobtitle.index')->with('success','The JobTitle created Successfully.');
            }
        
            public function show($id)
            {
                $data = JobTitle::findOrFail($id);
                return view("omis.master.jobtitle.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = JobTitle::findOrFail($id);
                return view("omis.master.jobtitle.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = JobTitle::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.jobtitle.index')->with('success','The JobTitle updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = JobTitle::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The JobTitle Deleted Successfully.'],200);
            }
        }
        