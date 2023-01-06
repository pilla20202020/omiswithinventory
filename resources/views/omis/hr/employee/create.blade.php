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
                                <ul class="d-flex">
                                    <li><a href="#" class="btn btn-primary btn-md d-md-none"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                    <li><a href="{{ route('hr.employee.index') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-eye"></em><span>View Employee</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">

                        <form action="#">
                            <div class="row g-gs">
                                <div class="col-xxl-9">
                                    <div class="gap gy-4">
                                        <div class="gap-col">
                                            <div class="card card-gutter-md">
                                                <div class="card-body">
                                                    <div class="row g-gs">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                <?php createInput('text', 'firstName', 'firstName', 'First Name', 'form-label', '', 'First Name' ); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                <?php createInput('text', 'middleName', 'middleName', 'Middle Name', 'form-label', '', 'Middel Name' ); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                               
                                                                <div class="form-control-wrap">
                                                                    <?php createInput('text', 'lastName', 'lastName', 'Last Name', 'form-label', '', '', 'Last Name'); ?>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                            <?php createInput('text', 'email', 'email', 'Email', 'form-label', '', '', 'Email'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            
                                                            <div class="form-group">
                                                                <?php createInput('text', 'phoneNumber', 'phoneNumber', 'Phone Number', 'form-label', '', '', 'Phone Number'); ?>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-4">
                                        
                                                            <div class="form-group">
                                                                <?php createInput('date', 'dob', 'dob', 'Date Of Birth', 'form-label', '', '', ''); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                            <?php createLabel('gender', 'form-label', 'Gender'); ?>
                                                            
                                                            <?php createSelect('gender', 'gender', '', '', ['Select One', 'Male', 'Female', 'Other']); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                        
                                                            <div class="form-group">
                                                                <?php createInput('panNo', 'panNo', 'panNo', 'PAN No', 'form-label', '', '', ''); ?>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                            <?php createLabel('department', 'form-label', 'Department'); ?>
                                                            <?php createSelect('department', 'department', '', '', ['Select One','Web Development', 'Finance Department', 'Creative Department']); ?>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                            <?php createLabel('designation', 'form-label', 'Designation'); ?>
                                                            <?php createSelect('designation', 'designation', '', '', ['Select One', '1', '2', '3']); ?>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                            <?php createLabel('reportingTo', 'form-label', 'Reporting To'); ?>
                                                            <?php createSelect('reportingTo', 'reportingTo', '', '', ['Select One','1', '2', '3']); ?>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <?php createLabel('officeShift', 'form-label', 'Office Shift'); ?>
                                                                <?php createSelect('officeShift', 'officeShift', '', '', ['Select One', 'Morning', 'Day', "Night"]); ?>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <?php createInput('date', 'joinedDate', 'joinedDate', 'Date Of Joining', 'form-label', '', '', ''); ?>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <?php createLabel('attendanceType', '', 'Attendance Type'); ?>
                                                                <?php createSelect('attendanceType', 'attendanceType', '', '', ['Select One','Office', 'Work From Home']); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <?php createLabel('addressType', 'form-label', 'Address'); ?>
                                                                <?php createTextArea('addressType', 'addressType','','e.g. Anamnagar, Kathmandu, Bagmati State, Nepal', 'form-control', '', '', '',''); ?>
                                                            </div>
                                                        </div>
                                                        <div class=" align-items-center code-toolbar  ">
                                                        </div>
                                                           
                                                            <div class=" col-md-6">
                                                                <div class="form-group">
                                                                    <?php createInput('password', 'password', 'password', 'Password','form-label', '', '', 'Password'); ?>
                                                                </div>
                                                            </div>
                        
                                                            <div class=" col-md-6">
                                                                
                                                                <div class="form-group">
                                                                <?php createInput('text', 'confirmPassword', 'confirmPassword', 'Confirm Password', 'form-label', '', '', 'Confirm Password'); ?>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                  
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-xxl-3">
                                    <div class="card card-gutter-md">
                                        <div class="card-body">
                                            <div class="row g-gs">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <?php createInput('text', 'staffId', 'staffId', 'Staff ID','form-label', '', '', 'Staff ID'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchSize">
                                                                                                                               
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group"><label class="form-label">Profile Picture</label>
                                                        <div class="form-control-wrap">
                                                            <div class="image-upload-wrap d-flex flex-column align-items-center">
                                                                <div class="media media-huge border">
                                                                    
                                                                    <?php createInput('file', 'image', 'image', '', '', '', ''); ?>
                                                                </div>
                                                                <div class="pt-3">
                                                                    <input class="upload-image" data-target="image-result" id="change-avatar" type="file" max="1" hidden>
                                                                    <label for="change-avatar" class="btn btn-md btn-primary">Upload Image</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-note mt-3">Set the profile image. Only *.png, *.jpg and *.jpeg image files are accepted.</div>
                                                    </div>
                                                </div>
                                              
                                                <div class=" align-items-center code-toolbar  ">
                                                </div>
                                                <div class="gap-col ">
                                                    <ul class="d-flex align-items-center gap g-3">
                                                        <li> <?php createButton('btn-primary', '', 'Submit'); ?></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>







                    
                </div>
            </div>
        </div>
    </div>

@endsection
