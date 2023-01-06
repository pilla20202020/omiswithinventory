@extends('omis.partials.layouts')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">Edit AttendanceFrom</h1>

                        </div>
                        <div class="nk-block-head-content">
                            <ul class="d-flex">
                                <li>
                                    <a href="{{ route('master.attendancefrom.index') }}" class="btn btn-md d-md-none btn-primary">
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
                            <form method="POST" action="{{route('master.attendancefrom.update',[$data->attendanceFrom_id])}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                <div class="col-lg-6">{{createText("attendanceFromApprovedEmployee_id","attendanceFromApprovedEmployee_id","Employee Id",'',$data->attendanceFromApprovedEmployee_id)}}
                                    </div>
                                    <div class="col-lg-6">{{createText("attendanceFromSupervisorEmployee_id","attendanceFromSupervisorEmployee_id","Supervisor Employee Id",'',$data->attendanceFromSupervisorEmployee_id)}}
                                    </div>
                                    <div class="col-lg-6">{{createText("attendanceFromLocation","attendanceFromLocation","Location",'',$data->attendanceFromLocation)}}
                                    </div>
                                    <div class="col-lg-6">{{createText("attendanceFromType","attendanceFromType","Type",'',$data->attendanceFromType)}}
                                    </div>
                                    <div class="col-lg-6">{{createText("attendanceFromDescription","Description","AttendanceFromDescription",'',$data->attendanceFromDescription)}}
                                    </div>
                                    <div class="col-lg-6">{{createText("attendanceFromActiveFrom","Active From","AttendanceFromActiveFrom",'',$data->attendanceFromActiveFrom)}}
                                    </div>
                              
                                    <div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
                                    </div>
                                    <div class="col-lg-6">{{createText("status","status","Status",'',$data->status)}}
                                    </div>
                                    <div class="col-lg-12">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
                                    </div>
                                    <div class="col-md-12"><?php createButton("btn-primary", "", "Submit"); ?>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection