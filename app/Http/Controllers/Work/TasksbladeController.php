<?php
        namespace App\Http\Controllers\Work;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Work\Tasksblade;
        use Illuminate\Support\Facades\DB;
        class TasksbladeController extends Controller
        {        
           public function index()
            {
                $data = Tasksblade::where('status','<>',-1)->get();
                return view("omis.work.tasksblade.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.work.tasksblade.create");
            }
        
            public function store(Request $request)
            {
                Tasksblade::create($request->all());
                return redirect()->route('work.tasksblade.index')->with('success','The Tasksblade created Successfully.');
            }
        
            public function show($id)
            {
                $data = Tasksblade::findOrFail($id);
                return view("omis.work.tasksblade.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Tasksblade::findOrFail($id);
                return view("omis.work.tasksblade.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Tasksblade::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('work.tasksblade.index')->with('success','The Tasksblade updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Tasksblade::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Tasksblade Deleted Successfully.'],200);
            }
        }
        