@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Proposal</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('finance.proposal.index') }}" class="btn btn-md d-md-none btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>View Cities</span>
                            </a>
                        </li>
                      
                    </ul>
                </div>
                </div>
            </div>

            <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                <form method="POST" action="{{route('finance.proposal.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("deparmentName_id","deparmentName_id","DeparmentName Id")}}
</div><div class="col-lg-6">{{createText("proposalTitle","proposalTitle","ProposalTitle")}}
</div><div class="col-lg-6">{{createText("proposalDetails","proposalDetails","ProposalDetails")}}
</div><div class="col-lg-6">{{createText("proposalSubmittedBy","proposalSubmittedBy","ProposalSubmittedBy")}}
</div><div class="col-lg-6">{{createText("proposalSubmittedTo","proposalSubmittedTo","ProposalSubmittedTo")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection