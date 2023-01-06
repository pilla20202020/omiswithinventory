@extends('omis.partials.layouts')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">Employees List</h1>
                                <nav>
                                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">User Manage</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Employee
                                        </li>
                                    </ol>
                                </nav>
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="d-flex">
                                <li><a href="#" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addUserModal"><em
                                            class="icon ni ni-plus"></em><span>Add</span></a></li>
                                <li><a href="{{ route('hr.employee.create') }}"
                                        class="btn btn-primary d-none d-md-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Add Employee</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card">
                        <table class="datatable-init table" data-nk-container="table-responsive">
                            <thead class="table-light">
                                <tr>
                                    <th class="tb-col"><span class="overline-title">Full Name</span></th>
                                    <th class="tb-col"><span class="overline-title">Positions</span>
                                    </th>
                                    <th class="tb-col"><span class="overline-title">Department</span></th>
                                    <th class="tb-col tb-col-xl"><span class="overline-title">Staff Id</span></th>
                                    <th class="tb-col tb-col-xxl"><span class="overline-title">Joined
                                            Date</span></th>
                                    <th class="tb-col"><span class="overline-title">Status</span></th>
                                    <th class="tb-col tb-col-end" data-sortable="false"><span
                                            class="overline-title">Action</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="tb-col">
                                        <div class="media-group">
                                            <div class="media media-md media-middle media-circle"><img
                                                    src="{{asset('assets/images/avatar/a.jpg')}}" alt="user"></div>
                                            <div class="media-text"><a href="user-profile.html" class="title">Florenza
                                                    Desporte</a><span class="small text">florenza@gmail.com</span></div>
                                        </div>
                                    </td>
                                    <td class="tb-col">Administrator</td>
                                    <td class="tb-col">Basic</td>
                                    <td class="tb-col tb-col-xl">Auto Debit</td>
                                    <td class="tb-col tb-col-xxl">2022/04/25</td>
                                    <td class="tb-col"><span class="badge text-bg-warning-soft">Pending</span></td>
                                    <td class="tb-col tb-col-end">
                                        <div class="dropdown"><a href="#"
                                                class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown"><em
                                                    class="icon ni ni-more-v"></em></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <div class="dropdown-content py-1">
                                                    <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                        <li><a href="user-edit.html"><em
                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                        </li>
                                                        <li><a href="user-edit.html"><em
                                                                    class="icon ni ni-trash"></em><span>Delete</span></a>
                                                        </li>
                                                        <li><a href="user-profile.html"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tb-col">
                                        <div class="media-group">
                                            <div class="media media-md media-middle media-circle"><img
                                                    src="{{asset('assets/images/avatar/a.jpg')}}" alt="user"></div>
                                            <div class="media-text"><a href="user-profile.html" class="title">Anna
                                                    Adame</a><span class="small text">anna@gmail.com</span></div>
                                        </div>
                                    </td>
                                    <td class="tb-col">Subscriber</td>
                                    <td class="tb-col">Enterprise</td>
                                    <td class="tb-col tb-col-xl">Manual - Paypal</td>
                                    <td class="tb-col tb-col-xxl">2022/03/23</td>
                                    <td class="tb-col"><span class="badge text-bg-success-soft">Active</span></td>
                                    <td class="tb-col tb-col-end">
                                        <div class="dropdown"><a href="#"
                                                class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown"><em
                                                    class="icon ni ni-more-v"></em></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <div class="dropdown-content py-1">
                                                    <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                        <li><a href="user-edit.html"><em
                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                        </li>
                                                        <li><a href="user-edit.html"><em
                                                                    class="icon ni ni-trash"></em><span>Delete</span></a>
                                                        </li>
                                                        <li><a href="user-profile.html"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tb-col">
                                        <div class="media-group">
                                            <div class="media media-md media-middle media-circle text-bg-info-soft">
                                                <span class="smaller">SB</span>
                                            </div>
                                            <div class="media-text"><a href="user-profile.html" class="title">Sean
                                                    Bean</a><span class="small text">sean@dellito.com</span></div>
                                        </div>
                                    </td>
                                    <td class="tb-col">Support</td>
                                    <td class="tb-col">Enterprise</td>
                                    <td class="tb-col tb-col-xl">Manual - Paypal</td>
                                    <td class="tb-col tb-col-xxl">2022/01/22</td>
                                    <td class="tb-col"><span class="badge text-bg-secondary-soft">Inactive</span></td>
                                    <td class="tb-col tb-col-end">
                                        <div class="dropdown"><a href="#"
                                                class="btn btn-sm btn-icon btn-zoom me-n1"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <div class="dropdown-content py-1">
                                                    <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                        <li><a href="user-edit.html"><em
                                                                    class="icon ni ni-edit"></em><span>Edit</span></a>
                                                        </li>
                                                        <li><a href="user-edit.html"><em
                                                                    class="icon ni ni-trash"></em><span>Delete</span></a>
                                                        </li>
                                                        <li><a href="user-profile.html"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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
