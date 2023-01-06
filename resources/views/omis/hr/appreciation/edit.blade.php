@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Appreciation</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('hr.appreciation.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('hr.appreciation.update',[$data->appreciation_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')
<div class="row"><div class="col-lg-6">{{createText("appreciationTitle","appreciationTitle","AppreciationTitle",'',$data->appreciationTitle)}}
</div><div class="col-lg-6">{{createText("appreciationType","appreciationType","AppreciationType",'',$data->appreciationType)}}
</div><div class="col-lg-6">{{createText("appreciatedBy","appreciatedBy","AppreciatedBy",'',$data->appreciatedBy)}}
</div><div class="col-lg-6">{{createText("recievedBy","recievedBy","RecievedBy",'',$data->recievedBy)}}
</div><div class="col-lg-6">{{createText("appreciationRecievedOn","appreciationRecievedOn","AppreciationRecievedOn",'',$data->appreciationRecievedOn)}}
</div><div class="col-lg-6">{{createText("appreciatioanApprovedOn","appreciatioanApprovedOn","AppreciatioanApprovedOn",'',$data->appreciatioanApprovedOn)}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'',$data->alias)}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks",'',$data->remarks)}}
</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection