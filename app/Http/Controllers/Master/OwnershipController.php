<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Ownership;
        use Illuminate\Support\Facades\DB;
        class OwnershipController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_ownership');
                // $data['TableRows'] = DB::select('select * from tbl_ownership');
                $data = Ownership::all();
                return view("omis.master.ownership.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.ownership.create");
            }
        
            public function store(Request $request)
            {
                Ownership::create($request->all());
                return redirect()->route('master.ownership.index')->with('success','The Ownership created Successfully.');
            }
        
            public function show($id)
            {
                $data = Ownership::findOrFail($id);
                return view("omis.master.ownership.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Ownership::findOrFail($id);
                return view("omis.master.ownership.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Ownership::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.ownership.index')->with('success','The Ownership updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Ownership::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.ownership.index')->with('success','The Ownership Soft deleted Successfully.');
            }
        }
        