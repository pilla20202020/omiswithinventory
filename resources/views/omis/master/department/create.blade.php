@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Department</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('master.department.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('master.department.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("department_name","department_name","Department Name")}}
</div><div class="col-lg-6">{{createDate("created_on","created_on","Created On",'','','')}}
</div><div class="col-lg-6">{{createText("created_by","created_by","Created By")}}
</div><div class="col-lg-6"><label for="status" class="form-label col-form-label">Status </label>{{createSelect("status","status","","Status",['Active','Inactive'])}}
</div><div class="col-lg-12"><label for="remarks" class="form-label col-form-label">Remarks </label>{{createTextArea("","remarks","3","")}}
</div>  <div class="col-md-12"><?php createButton("mt-3 btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection