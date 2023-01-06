@extends('omis.partials.layouts')
@section('content')

    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Department</h2>

                            </div>
                           
                        </div>
                    </div>
                    <div class="nk-block">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="container">
                                <form action="" class="row gy-3 mt-2">

                                    <div class="form-control-wrap col-md-6">
                                        <?php createLabel('department', '', 'Department'); ?>
                                        <?php createInput('text', 'department', 'department', 'form-label', '', '', 'Add Department'); ?>
                                    </div>

                                    <div class="form-control-wrap col-md-6">
                                        <?php createLabel('parent', '', 'Parent'); ?>
                                        <?php createSelect('text', 'department', 'department', 'form-label', '', '', 'Department'); ?>
                                    </div>
                                    
                                        <div class="form-control-wrap col-md-12">
                                        <?php createButton('btn-primary', '', 'Submit'); ?>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection
