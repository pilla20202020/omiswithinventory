<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Nationality;
        use Illuminate\Support\Facades\DB;
        class NationalityController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_nationality');
                // $data['TableRows'] = DB::select('select * from tbl_nationality');
                $data = Nationality::all();
                return view("omis.master.nationality.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.nationality.create");
            }
        
            public function store(Request $request)
            {
                Nationality::create($request->all());
                return redirect()->route('master.nationality.index')->with('success','The Nationality created Successfully.');
            }
        
            public function show($id)
            {
                $data = Nationality::findOrFail($id);
                return view("omis.master.nationality.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Nationality::findOrFail($id);
                return view("omis.master.nationality.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Nationality::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.nationality.index')->with('success','The Nationality updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Nationality::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.nationality.index')->with('success','The Nationality Soft deleted Successfully.');
            }
        }
        