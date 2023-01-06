<?php
        namespace App\Http\Controllers\Notice;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Notice\Announcement;
        use Illuminate\Support\Facades\DB;
        class AnnouncementController extends Controller
        {        
           public function index()
            {
                $data = Announcement::where('status','<>',-1)->get();
                return view("omis.notice.announcement.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.notice.announcement.create");
            }
        
            public function store(Request $request)
            {
                Announcement::create($request->all());
                return redirect()->route('notice.announcement.index')->with('success','The Announcement created Successfully.');
            }
        
            public function show($id)
            {
                $data = Announcement::findOrFail($id);
                return view("omis.notice.announcement.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Announcement::findOrFail($id);
                return view("omis.notice.announcement.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Announcement::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('notice.announcement.index')->with('success','The Announcement updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Announcement::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Announcement Deleted Successfully.'],200);
            }
        }
        