<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Traveltypes;
        use Illuminate\Support\Facades\DB;
        class TraveltypesController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_traveltypes');
                // $data['TableRows'] = DB::select('select * from tbl_traveltypes');
                $data = Traveltypes::all();
                return view("omis.master.traveltypes.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.traveltypes.create");
            }
        
            public function store(Request $request)
            {
                Traveltypes::create($request->all());
                return redirect()->route('master.traveltypes.index')->with('success','The Traveltypes created Successfully.');
            }
        
            public function show($id)
            {
                $data = Traveltypes::findOrFail($id);
                return view("omis.master.traveltypes.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Traveltypes::findOrFail($id);
                return view("omis.master.traveltypes.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Traveltypes::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.traveltypes.index')->with('success','The Traveltypes updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Traveltypes::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.traveltypes.index')->with('success','The Traveltypes Soft deleted Successfully.');
            }
        }
        