<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand"><a href="index-2.html" class="logo-link">
                <div class="logo-wrap">OMIS Projects</div>
            </a>
            <div class="nk-compact-toggle me-n1"><button
                    class="btn btn-md btn-icon text-light btn-no-hover compact-toggle"><em
                        class="icon off ni ni-chevrons-left"></em><em class="icon on ni ni-chevrons-right"></em></button>
            </div>
            <div class="nk-sidebar-toggle me-n1"><button
                    class="btn btn-md btn-icon text-light btn-no-hover sidebar-toggle"><em
                        class="icon ni ni-arrow-left"></em></button></div>
        </div>
    </div>
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link ">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span
                                class="nk-menu-text">forms</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('form.create') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">crud</span></a></li>
                        </ul>
                    </li>


                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-centos"></em></span><span
                                class="nk-menu-text">CRM</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="apps/kanban/kanban-basic.html" class="nk-menu-link"><span
                                        class="nk-menu-text">Leads</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Clients</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span
                                class="nk-menu-text">Master</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('master.country.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Countries </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.city.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Cities </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.district.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">District </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.nationality.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Nationality </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.policy.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Policy </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.state.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">state </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.organizationtype.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Organization Type </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.employee.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Employee </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.organizationcategory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Organization Category </span></a>
                            </li>
                            <li class="nk-menu-item"><a href="{{ route('master.holidaytypes.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Holiday Types </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.fleet.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Fleet Types</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.traveltypes.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Travel Types</span></a></li>
                            <li class="nk-menu-item"><a href="#"
                                    class="nk-menu-link"><span class="nk-menu-text">Department Type</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.employmentsizecategory.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Employment Size
                                        Category</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.attendancefrom.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Attendance Form</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('master.jobtitle.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Job Title</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span
                                class="nk-menu-text">HR</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('hr.employee.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Employees </span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Leaves</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.leaveapplication.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Leave Application</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.shiftroster.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Shift</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Attendance</span></a></li>
                            <li class="nk-menu-item"><a href="{{route('hr.mangeholiday.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Manage Holiday</span></a></li>
                            <li class="nk-menu-item"><a href="{{route('hr.designation.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Designation</span></a></li>
                            <li class="nk-menu-item"><a href="{{route('hr.department.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Department</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.appreciation.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Appreciation</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('hr.complaints.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Complaints</span></a></li>
                                        <li class="nk-menu-item"><a href="{{ route('hr.warnings.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Warnings</span></a></li>
                                        <li class="nk-menu-item"><a href="{{ route('hr.transfer.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Transfer</span></a></li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-users"></em></span><span
                                class="nk-menu-text">Work</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Contracts </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('work.workprojects.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Projects</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('work.tasksblade.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Tasks</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Time Logs</span></a></li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-coin-eur"></em></span><span
                                class="nk-menu-text">Finance</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('finance.proposal.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Proposal</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('finance.estimates.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Estimates</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Invoices</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('finance.financepay.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Payments</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('finance.creditnotes.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Credit Notes</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('finance.financeexpenses.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Expenses</span></a></li>
                                        <li class="nk-menu-item"><a href="{{ route('finance.advancerequest.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Advance Request</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-bag"></em></span><span
                                class="nk-menu-text">Suppliers</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('master.addsupplier.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Add Supplier</span></a></li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span><span
                                class="nk-menu-text">Notice Board</span></a>
                        <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{route('notice.announcement.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Announcement</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Overview</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Details View</span></a></li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-building-fill"></em></span><span
                                class="nk-menu-text">Assets</span></a>
                                <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{route('assets.assestcategory.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Add Assets Category</span></a></li>
                                            </ul>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-layers"></em></span><span
                                class="nk-menu-text">Payroll</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Payroll</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Emplyees Salary</span></a></li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-package"></em></span><span
                                class="nk-menu-text">Forms</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Controls</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Select</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Date &amp; Time Picker</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Upload</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Input group</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Floating labels</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Checks and radios</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Range</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Validation</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                        class="nk-menu-text">Form Layout</span></a></li>
                            <li class="nk-menu-item has-sub"><a href="#"
                                    class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Rich
                                        Editors</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                                class="nk-menu-text">Quill</span></a></li>
                                    <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span
                                                class="nk-menu-text">Tinymce</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-signin"></em></span><span
                                class="nk-menu-text">Recruit</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Dashboard</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Skills</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Jobs</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Job Applications</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Interview Schedule</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Offer Letter</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Experienced Letter</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Candidate Database</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Reports</span></a></li>
                        </ul>
                        <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span
                                class="nk-menu-text">Requisition</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{route('requisition.travel.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Travel List</span></a></li>
                                        <li class="nk-menu-item"><a href="{{route('requisition.requisitiontravel.index')}}" class="nk-menu-link"><span
                                        class="nk-menu-text">Travel</span></a></li>
</ul>
</li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span
                                class="nk-menu-text">Reports</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Task Report</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Time Log Report</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Finance Report</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Leave Report</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Expenses Report</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Attendance Report</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">Attendance Report</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-archived"></em></span><span
                                class="nk-menu-text">File Manager</span></a>
                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">404 Classic</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">504 Classic</span></a></li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                        class="nk-menu-icon"><em class="icon ni ni-coin-eur"></em></span><span
                        class="nk-menu-text">Inventory</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('inventory.brand.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Brand</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('inventory.category.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Category</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('inventory.supplier.index') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Supplier</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('inventory.unit.index') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">Unit</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('inventory.product.index') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Product</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('inventory.price.index') }}" class="nk-menu-link"><span
                                                    class="nk-menu-text">Price</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('inventory.purchaseorder.index') }}" class="nk-menu-link"><span
                                                        class="nk-menu-text">Purchase Order</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('inventory.purchaseentry.index') }}" class="nk-menu-link"><span
                                                            class="nk-menu-text">Purchase Order</span></a></li>

                        </ul>
                    </li>
                    {{-- <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span
                                class="nk-menu-text">Settings</span></a>
                        <ul class="nk-menu-sub">
                            {{ BibClass::createSidebarMenu(url('settings/dictonary'), 'Dictonary') }}
                            {{ BibClass::createSidebarMenu(url('settings/curd/'), 'CURD Function') }}
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">404 Classic</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link" target="_blank"><span
                                        class="nk-menu-text">504 Classic</span></a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
