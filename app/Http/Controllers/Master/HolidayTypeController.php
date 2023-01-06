<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\HolidayType;
        use Illuminate\Support\Facades\DB;
        class HolidayTypeController extends Controller
        {
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_holidayType');
                // $data['TableRows'] = DB::select('select * from tbl_holidayType');
                $data = HolidayType::all();
                return view("omis.master.holidaytype.index", compact('data'));
            }

            public function create()
            {
                return view("omis.master.holidaytype.create");
            }

            public function store(Request $request)
            {
                HolidayType::create($request->all());
                return redirect()->route('master.holidaytype.index')->with('success','The HolidayType created Successfully.');
            }

            public function show($id)
            {
                $data = HolidayType::findOrFail($id);
                return view("omis.master.holidaytype.show", compact('data'));
            }


            public function edit($id)
            {
                $data = HolidayType::findOrFail($id);
                return view("omis.master.holidaytype.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = HolidayType::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.holidaytype.index')->with('success','The HolidayType updated Successfully.');
            }

            public function destroy($id)
            {
                $data = HolidayType::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.holidaytype.index')->with('success','The HolidayType Soft deleted Successfully.');
            }
        }
