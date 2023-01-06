<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\MangeHoliday;
        use Illuminate\Support\Facades\DB;
        class MangeHolidayController extends Controller
        {        
           public function index()
            {
                $data = MangeHoliday::where('status','<>',-1)->get();
                return view("omis.hr.mangeholiday.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.mangeholiday.create");
            }
        
            public function store(Request $request)
            {
                MangeHoliday::create($request->all());
                return redirect()->route('hr.mangeholiday.index')->with('success','The MangeHoliday created Successfully.');
            }
        
            public function show($id)
            {
                $data = MangeHoliday::findOrFail($id);
                return view("omis.hr.mangeholiday.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = MangeHoliday::findOrFail($id);
                return view("omis.hr.mangeholiday.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = MangeHoliday::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.mangeholiday.index')->with('success','The MangeHoliday updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = MangeHoliday::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The MangeHoliday Deleted Successfully.'],200);
            }
        }
        