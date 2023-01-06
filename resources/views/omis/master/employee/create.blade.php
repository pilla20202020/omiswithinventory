@extends('omis.partials.layouts')
        @section('content')
        <div class="nk-content">
            <div class="container">
                <div class="nk-content-inner">
                <div class="nk-content-body">
                <div class="nk-block-head">
                <div class="nk-block-head-between flex-wrap gap g-2">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title">Add Employee</h1>

                    </div>
                    <div class="nk-block-head-content">
                    <ul class="d-flex"> <li>
                        <a href="{{ route('master.employee.index') }}" class="btn btn-md d-md-none btn-primary">
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
                <form method="POST" action="{{route('master.employee.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("employeeFirstName","employeeFirstName","First Name")}}
</div><div class="col-lg-6">{{createText("employeeMiddleName","employeeMiddleName","Middle Name")}}
</div><div class="col-lg-6">{{createText("employeeLastName","employeeLastName","Last Name")}}
</div><div class="col-lg-6">{{createText("phone","phone","Phone")}}
</div><div class="col-lg-6">{{createText("email","email","Email")}}
</div><div class="col-lg-6">{{createText("employeeRole","employeeRole","Role")}}
</div><div class="col-lg-6">{{createText("employeeSalary","employeeSalary","Salary")}}
</div><div class="col-lg-6">{{createText("alias","alias","Alias")}}
</div><div class="col-12"><label for="status" class="form-label col-form-label">Status</label>{{createSelect("status","status","", "", array('Active', 'Inactive'))}}
</div><div class="col-12"><label for="remarks" class="form-label col-form-label">Remarks</label>{{createTextArea("remarks","remarks","","")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary mt-3","","Submit"); ?>
</div> </form></div></div></div></div></div></div></div></div>
@endsection