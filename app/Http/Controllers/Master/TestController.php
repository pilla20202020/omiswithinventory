<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Test;
        use Illuminate\Support\Facades\DB;
        class TestController extends Controller
        {        
           public function index()
            {
                $data = Test::where('status','<>',-1)->get();
                return view("omis.master.test.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.test.create");
            }
        
            public function store(Request $request)
            {
                Test::create($request->all());
                return redirect()->route('master.test.index')->with('success','The Test created Successfully.');
            }
        
            public function show($id)
            {
                $data = Test::findOrFail($id);
                return view("omis.master.test.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Test::findOrFail($id);
                return view("omis.master.test.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Test::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.test.index')->with('success','The Test updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Test::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Test Deleted Successfully.'],200);
            }
        }
        