<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\AddSupplier;
        use Illuminate\Support\Facades\DB;
        class AddSupplierController extends Controller
        {        
           public function index()
            {
                $data = AddSupplier::where('status','<>',-1)->get();
                return view("omis.master.addsupplier.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.addsupplier.create");
            }
        
            public function store(Request $request)
            {
                AddSupplier::create($request->all());
                return redirect()->route('master.addsupplier.index')->with('success','The AddSupplier created Successfully.');
            }
        
            public function show($id)
            {
                $data = AddSupplier::findOrFail($id);
                return view("omis.master.addsupplier.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = AddSupplier::findOrFail($id);
                return view("omis.master.addsupplier.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = AddSupplier::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.addsupplier.index')->with('success','The AddSupplier updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = AddSupplier::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The AddSupplier Deleted Successfully.'],200);
            }
        }
        