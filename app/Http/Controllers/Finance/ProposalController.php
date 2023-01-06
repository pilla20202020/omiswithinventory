<?php
        namespace App\Http\Controllers\Finance;       
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Proposal;
        use Illuminate\Support\Facades\DB;
        class ProposalController extends Controller
        {        
           public function index()
            {
                $data = Proposal::where('status','<>',-1)->get();
                return view("omis.finance.proposal.index", compact('data'));
            }       
        
            public function create()
            {
                return view("omis.finance.proposal.create");
            }
        
            public function store(Request $request)
            {
                Proposal::create($request->all());
                return redirect()->route('finance.proposal.index')->with('success','The Proposal created Successfully.');
            }
        
            public function show($id)
            {
                $data = Proposal::findOrFail($id);
                return view("omis.finance.proposal.show", compact('data'));
            }
        
        
            public function edit($id)
            {
                $data = Proposal::findOrFail($id);
                return view("omis.finance.proposal.edit", compact('data'));
            }
        
        
            public function update(Request $request, $id)
            {
                $data = Proposal::findOrFail($id);
                $data->update($request->all());
                return redirect()->route('finance.proposal.index')->with('success','The Proposal updated Successfully.');
            }
        
            public function destroy($id)
            {
                $data = Proposal::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Proposal Deleted Successfully.'],200);
            }
        }
        