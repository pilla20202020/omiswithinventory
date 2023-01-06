<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Policy;
        use Illuminate\Support\Facades\DB;
        class PolicyController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_policy');
                // $data['TableRows'] = DB::select('select * from tbl_policy');
                $data = Policy::all();
                return view("omis.master.policy.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.policy.create");
            }
        
            public function store(Request $request)
            {
                Policy::create($request->all());
                return redirect()->route('master.policy.index')->with('success','The Policy created Successfully.');
            }
        
            public function show($id)
            {
                $data = Policy::findOrFail($id);
                return view("omis.master.policy.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Policy::findOrFail($id);
                return view("omis.master.policy.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Policy::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.policy.index')->with('success','The Policy updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Policy::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.policy.index')->with('success','The Policy Soft deleted Successfully.');
            }
        }
        