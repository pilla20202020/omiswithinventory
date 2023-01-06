<?php
        namespace App\Http\Controllers\Master;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\State;
        use Illuminate\Support\Facades\DB;
        class StateController extends Controller
        {        
           public function index()
            {
                // $data['TableCols'] = DB::select('describe tbl_state');
                // $data['TableRows'] = DB::select('select * from tbl_state');
                $data = State::all();
                return view("omis.master.state.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.master.state.create");
            }
        
            public function store(Request $request)
            {
                State::create($request->all());
                return redirect()->route('master.state.index')->with('success','The State created Successfully.');
            }
        
            public function show($id)
            {
                $data = State::findOrFail($id);
                return view("omis.master.state.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = State::findOrFail($id);
                return view("omis.master.state.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = State::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('master.state.index')->with('success','The State updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = State::findOrFail($id);
                $data->status = 0;
                $data->save();
                return redirect()->route('master.state.index')->with('success','The State Soft deleted Successfully.');
            }
        }
        