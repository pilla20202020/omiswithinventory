<form method="POST" action="{{route('master.city.update')}}" enctype="multipart/form-data">

        @csrf 

            @method('PUT')
{{createText("city_id","city_id","City Id")}}
{{createText("cityName","cityName","CityName")}}
{{createText("createdOn","createdOn","CreatedOn")}}
{{createText("createdBy","createdBy","CreatedBy")}}
{{createText("alias","alias","Alias")}}
{{createText("status","status","Status")}}
{{createText("remarks","remarks","Remarks")}}
<?php createButton("btn-primary","","Submit"); ?>
 </form></div></div></div>
@endsection