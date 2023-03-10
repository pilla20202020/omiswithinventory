@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Edit Announcement</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('notice.announcement.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('notice.announcement.update',[$data->announcement_id])}}" enctype="multipart/form-data">
 @csrf 
 @method('PUT')

 <div class="row"><div class="col-lg-6">{{createText("announcementTitle","announcementTitle","Announcement Title",'',$data->announcementTitle)}}
</div><div class="col-lg-6">{{createText("company_id","company_id","Company Id",'',$data->company_id)}}
</div><div class="col-lg-6">{{createLabel('announcementSummary','form-label col-form-label','Announcement Summary')}}{{createTextArea("","announcementSummary","",'$data->announcementSummary')}}
</div><div class="col-lg-6">{{createText("announcementDepartment","announcementDepartment","Announcement Department",'','$data->announcementDepartment')}}
</div><div class="col-lg-6">{{createDate("announcementStartDate","announcementStartDate","Announcement StartDate",'','$data->announcementStartDate')}}
</div><div class="col-lg-6">{{createDate("announcementEndDate","announcementEndDate","Announcement EndDate",'','$data->announcementEndDate')}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias",'','$data->alias')}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'],$data->status)}}
</div><div class="col-lg-6">{{createLabel('announcementDescription','form-label col-form-label','Announcement Description')}}{{createTextArea("","announcementDescription","3","")}}


</div><div class="col-lg-6">{{createLabel('remarks','form-label col-form-label','Remarks')}}{{createTextArea("","remarks","3","$data->remarks")}}

</div>  <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection