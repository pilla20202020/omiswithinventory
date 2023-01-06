<form method="POST" action="{{route('master.district.update')}}" enctype="multipart/form-data">

        @csrf 

            @method('PUT')
{{createText("district_id","district_id","District Id")}}
{{createText("districtName","districtName","DistrictName")}}
{{createText("createdOn","createdOn","CreatedOn")}}
{{createText("createdBy","createdBy","CreatedBy")}}
{{createText("alias","alias","Alias")}}
{{createText("status","status","Status")}}
{{createText("remarks","remarks","Remarks")}}
<?php createButton("btn-primary","","Submit"); ?>
 </form></div></div></div>
@endsection