<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Fleet;
        use Illuminate\Support\Facades\DB;
        class FleetController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_fleet');
                // $data['TableRows'] = DB::select('select * from tbl_fleet');
                $data = Fleet::all();
                return view("omis.master.fleet.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.fleet.create");
            }
        
            public function store(Request $request)
            {
                Fleet::create($request->all());
                return redirect()->route('master.fleet.index')->with('success','The Fleet created Successfully.');
            }
        
            public function show($id)
            {
                $data = Fleet::findOrFail($id);
                return view("omis.master.fleet.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Fleet::findOrFail($id);
                return view("omis.master.fleet.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Fleet::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.fleet.index')->with('success','The Fleet updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Fleet::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.fleet.index')->with('success','The Fleet Soft deleted Successfully.');
            }
        }
        