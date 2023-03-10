@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add LeaveApplication</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('hr.leaveapplication.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('hr.leaveapplication.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("leaveRequestedBy","leaveRequestedBy","LeaveRequestedBy")}}
</div><div class="col-lg-6">{{createText("employeeNumber","employeeNumber","EmployeeNumber")}}
</div><div class="col-lg-6">{{createText("chooseDepartment_id","chooseDepartment_id","ChooseDepartment Id")}}
</div><div class="col-lg-6">{{createText("leaveType","leaveType","LeaveType")}}
</div><div class="col-lg-6">{{createText("leaveStart","leaveStart","LeaveStart")}}
</div><div class="col-lg-6">{{createText("leaveEnd","leaveEnd","LeaveEnd")}}
</div><div class="col-lg-6">{{createText("leaveApprovalBy","leaveApprovalBy","LeaveApprovalBy")}}
</div><div class="col-lg-6">{{createText("leaveApprovedDate","leaveApprovedDate","LeaveApprovedDate")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection