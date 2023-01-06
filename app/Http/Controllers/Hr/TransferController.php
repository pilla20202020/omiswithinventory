<?php
        namespace App\Http\Controllers\Hr;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Transfer;
        use Illuminate\Support\Facades\DB;
        class TransferController extends Controller
        {        
           public function index()
            {
                $data = Transfer::where('status','<>',-1)->get();
                return view("omis.hr.transfer.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.hr.transfer.create");
            }
        
            public function store(Request $request)
            {
                Transfer::create($request->all());
                return redirect()->route('hr.transfer.index')->with('success','The Transfer created Successfully.');
            }
        
            public function show($id)
            {
                $data = Transfer::findOrFail($id);
                return view("omis.hr.transfer.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Transfer::findOrFail($id);
                return view("omis.hr.transfer.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Transfer::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('hr.transfer.index')->with('success','The Transfer updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Transfer::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Transfer Deleted Successfully.'],200);
            }
        }
        