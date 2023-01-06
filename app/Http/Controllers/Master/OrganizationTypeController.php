<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\OrganizationType;
        use Illuminate\Support\Facades\DB;
        class OrganizationTypeController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_organizationType');
                // $data['TableRows'] = DB::select('select * from tbl_organizationType');
                $data = OrganizationType::all();
                return view("omis.master.organizationtype.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.organizationtype.create");
            }
        
            public function store(Request $request)
            {
                OrganizationType::create($request->all());
                return redirect()->route('master.organizationtype.index')->with('success','The OrganizationType created Successfully.');
            }
        
            public function show($id)
            {
                $data = OrganizationType::findOrFail($id);
                return view("omis.master.organizationtype.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = OrganizationType::findOrFail($id);
                return view("omis.master.organizationtype.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = OrganizationType::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.organizationtype.index')->with('success','The OrganizationType updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = OrganizationType::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.organizationtype.index')->with('success','The OrganizationType Soft deleted Successfully.');
            }
        }
        