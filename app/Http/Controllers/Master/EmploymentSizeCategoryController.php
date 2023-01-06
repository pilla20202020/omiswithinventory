<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\EmploymentSizeCategory;
        use Illuminate\Support\Facades\DB;
        class EmploymentSizeCategoryController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_employmentSizeCategory');
                // $data['TableRows'] = DB::select('select * from tbl_employmentSizeCategory');
                $data = EmploymentSizeCategory::all();
                return view("omis.master.employmentsizecategory.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.employmentsizecategory.create");
            }
        
            public function store(Request $request)
            {
                EmploymentSizeCategory::create($request->all());
                return redirect()->route('master.employmentsizecategory.index')->with('success','The EmploymentSizeCategory created Successfully.');
            }
        
            public function show($id)
            {
                $data = EmploymentSizeCategory::findOrFail($id);
                return view("omis.master.employmentsizecategory.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = EmploymentSizeCategory::findOrFail($id);
                return view("omis.master.employmentsizecategory.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = EmploymentSizeCategory::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.employmentsizecategory.index')->with('success','The EmploymentSizeCategory updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = EmploymentSizeCategory::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.employmentsizecategory.index')->with('success','The EmploymentSizeCategory Soft deleted Successfully.');
            }
        }
        