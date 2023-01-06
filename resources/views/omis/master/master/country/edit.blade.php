<form method="POST" action="{{route('master.country.update')}}" enctype="multipart/form-data">

        @csrf 

            @method('PUT')
{{createText("country_id","country_id","Country Id")}}
{{createText("countryName","countryName","CountryName")}}
{{createText("createdOn","createdOn","CreatedOn")}}
{{createText("createdBy","createdBy","CreatedBy")}}
{{createText("alias","alias","Alias")}}
{{createText("status","status","Status")}}
{{createText("remarks","remarks","Remarks")}}
<?php createButton("btn-primary","","Submit"); ?>
 </form></div></div></div>
@endsection