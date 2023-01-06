@extends('omis.partials.layouts')


@section('title', 'category')

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

                    <form class="form form-validate floating-label"
                        action="{{ route('inventory.category.update', $category->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @include('omis.inventory.category.partials.form', [
                            'header' =>
                                'Edit category <span class="text-primary">(' . $category->name . ')</span>',
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@push('styles')
    <link href="{{ asset('backend/assets/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('backend/assets/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/libs/dropify/dropify.min.js') }}"></script>
@endpush
