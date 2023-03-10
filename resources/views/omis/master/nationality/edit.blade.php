@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Nationality</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('master.nationality.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('master.nationality.update',[$data->nationality_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("nationalityName","nationalityName","NationalityName",'',$data->nationalityName)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-12"><label for="status" class="form-label col-form-label"> Status</label>{{createSelect("status","status","", "", $data->status)}}
</div><div class="col-12"><label for="remarks" class="form-label col-form-label">Remarks</label>{{createTextArea("remarks","remarks","", "")}}
</div>  <div class="col-md-12"><?php createButton("btn-primary mt-3","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection