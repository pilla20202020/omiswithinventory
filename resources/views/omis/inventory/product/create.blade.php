@extends('omis.partials.layouts')

@section('content')

<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-block">

        <div class="card">
            <div class="card-body">
                <form class="form form-validate floating-label" action="{{route('inventory.product.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                @include('omis.inventory.product.partials.form',['header' => 'Create a product'])
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addUnit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Unit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group ">
                                <label for="name" class="col-form-label pt-0">Unit Name</label>
                                <div class="">
                                    <input class="form-control store_unitname" name="name" type="text" required value="{{ old('name', isset($unit->name) ? $unit->name : '') }}" placeholder="Enter Your Name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-addunitstore" data-dismiss="modal">Add Unit</button>
                </div>
        </div>
        </div>
    </div>

@stop





