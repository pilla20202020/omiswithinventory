@extends('omis.partials.layouts')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">Department List</h1>
                               
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="d-flex">
                                <li><a href="#" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addUserModal"><em
                                            class="icon ni ni-plus"></em><span>Add</span></a></li>
                                <li><a href="{{ route('hr.department.create') }}"
                                        class="btn btn-primary d-none d-md-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Add Department</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card">
                        <table class="datatable-init table" data-nk-container="table-responsive">
                            <thead class="table-light">
                                <tr>
                                    <th class="tb-col"><span class="overline-title">Department</span></th>
                                    <th class="tb-col"><span class="overline-title">Parent Department</span>
                                    </th>
                                    
                                    <th class="tb-col"><span class="overline-title">Status</span></th>
                                    <th class="tb-col " data-sortable="false"><span
                                            class="overline-title">Action</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="tb-col">
                                        <div class="media-group">
                                            
                                            <div class="media-text"><a href="user-profile.html" class="title">Florenza
                                                    Desporte</a></div>
                                        </div>
                                    </td>
                                    <td class="tb-col">Administrator</td>
                                  <td class="tb-col"><span class="badge text-bg-warning-soft">Pending</span></td>
                                    <td class="tb-col tb-col-end">
                                        <ul class="d-flex flex-wrap ">
                                            <li><a href="view-detail-2.php" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                             <li><a href="form2.php" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                            <li><button type="button" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                           
                                        </ul>
                                    </td>
                                </tr>
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
