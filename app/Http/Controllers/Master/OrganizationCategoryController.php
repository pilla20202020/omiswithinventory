<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\OrganizationCategory;
        use Illuminate\Support\Facades\DB;
        class OrganizationCategoryController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_organizationCategory');
                // $data['TableRows'] = DB::select('select * from tbl_organizationCategory');
                $data = OrganizationCategory::all();
                return view("omis.master.organizationcategory.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.organizationcategory.create");
            }
        
            public function store(Request $request)
            {
                OrganizationCategory::create($request->all());
                return redirect()->route('master.organizationcategory.index')->with('success','The OrganizationCategory created Successfully.');
            }
        
            public function show($id)
            {
                $data = OrganizationCategory::findOrFail($id);
                return view("omis.master.organizationcategory.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = OrganizationCategory::findOrFail($id);
                return view("omis.master.organizationcategory.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = OrganizationCategory::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.organizationcategory.index')->with('success','The OrganizationCategory updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = OrganizationCategory::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.organizationcategory.index')->with('success','The OrganizationCategory Soft deleted Successfully.');
            }
        }
        