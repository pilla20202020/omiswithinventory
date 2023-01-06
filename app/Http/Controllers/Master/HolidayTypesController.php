<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\HolidayTypes;
        use Illuminate\Support\Facades\DB;
        class HolidayTypesController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_holidayTypes');
                // $data['TableRows'] = DB::select('select * from tbl_holidayTypes');
                $data = HolidayTypes::all();
                return view("omis.master.holidaytypes.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.holidaytypes.create");
            }
        
            public function store(Request $request)
            {
                HolidayTypes::create($request->all());
                return redirect()->route('master.holidaytypes.index')->with('success','The HolidayTypes created Successfully.');
            }
        
            public function show($id)
            {
                $data = HolidayTypes::findOrFail($id);
                return view("omis.master.holidaytypes.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = HolidayTypes::findOrFail($id);
                return view("omis.master.holidaytypes.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = HolidayTypes::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.holidaytypes.index')->with('success','The HolidayTypes updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = HolidayTypes::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.holidaytypes.index')->with('success','The HolidayTypes Soft deleted Successfully.');
            }
        }
        