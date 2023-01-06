<?php
        namespace App\Http\Controllers\Finance;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Estimates;
        use Illuminate\Support\Facades\DB;
        class EstimatesController extends Controller
        {        
           public function index()
            {
                $data = Estimates::where('status','<>',-1)->get();
                return view("omis.finance.estimates.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.finance.estimates.create");
            }
        
            public function store(Request $request)
            {
                Estimates::create($request->all());
                return redirect()->route('finance.estimates.index')->with('success','The Estimates created Successfully.');
            }
        
            public function show($id)
            {
                $data = Estimates::findOrFail($id);
                return view("omis.finance.estimates.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Estimates::findOrFail($id);
                return view("omis.finance.estimates.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Estimates::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('finance.estimates.index')->with('success','The Estimates updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Estimates::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Estimates Deleted Successfully.'],200);
            }
        }
        