<form method="POST" action="{{route('hr.department.update')}}" enctype="multipart/form-data">

        @csrf 

            @method('PUT')
{{createText("department_id","department_id","Department Id")}}
{{createText("department_name","department_name","Department Name")}}
{{createText("created_on","created_on","Created On")}}
{{createText("created_by","created_by","Created By")}}
{{createText("remarks","remarks","Remarks")}}
{{createText("status","status","Status")}}
{{createText("created_at","created_at","Created At")}}
{{createText("updated_at","updated_at","Updated At")}}
<?php createButton("btn-primary","","Submit"); ?>
 </form></div></div></div>
@endsection