@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Travel</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('requisition.travel.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('requisition.travel.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employeeName_id","employeeName_id","EmployeeName Id")}}
</div><div class="col-lg-6">{{createText("arrangementType_id","arrangementType_id","ArrangementType Id")}}
</div><div class="col-lg-6">{{createText("purposeOfVisit","purposeOfVisit","PurposeOfVisit")}}
</div><div class="col-lg-6">{{createText("destination","destination","Destination")}}
</div><div class="col-lg-6">{{createText("travelStartDate","travelStartDate","TravelStartDate")}}
</div><div class="col-lg-6">{{createText("travelEndDate","travelEndDate","TravelEndDate")}}
</div><div class="col-lg-6">{{createText("expectedBudget","expectedBudget","ExpectedBudget")}}
</div><div class="col-lg-6">{{createText("actualBudget","actualBudget","ActualBudget")}}
</div><div class="col-lg-6">{{createText("travelMode","travelMode","TravelMode")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-lg-6">{{customCreateSelect("status","status",'',"Status",['1'=>'Active','0'=>'Inactive'])}}
</div><div class="col-lg-6">{{createText("remarks","remarks","Remarks")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection