@extends('omis.partials.layouts')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TableTools.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}"/>
@endsection

@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h3 class="card-title">All Brand List</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="d-flex">
                                <li><a href="{{route('inventory.brand.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                        data-bs-target=""><em
                                            class="icon ni ni-plus"></em><span>Add</span></a></li>
                                <li><a href="{{route('inventory.brand.create')}}"
                                        class="btn btn-primary d-none d-md-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Add Brand</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card p-4">
                        <div class="table-responsive">
                            <table id="datatable" class="table border-0 table-striped">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>S.No.</th>
                                    <th>Image</th>
                                    <th>Brand Name</th>
                                    <th>Description</th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>



    <!-- Main content -->

    </div>
</div>

@stop

@push('js')

    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable({
                processing: false,
                serverSide: false,
                // scrollY: '52vh',
                // scrollX: true,
                pageLength: 25,
                bFilter: true,
                bSort: true,
                "ajax": '{{ route('inventory.brand.data') }}',
                // dom: 'Bfrtip',
                // buttons: [
                //     'copy', 'csv', 'excel', 'pdf', 'print',
                //     // exportOptions: {
                //     //     columns: 'th:not(:last-child)'
                //     // }
                // ],
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        text: 'Export Search Results',
                        className: 'btn btn-default',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    }
                ],
                "columns": [
                    { "data": "id",  'visible': false },
                    { "data": "DT_RowIndex",  orderable: false, searchable: false },
                    { "data": "image" },
                    { "data": "name" },
                    { "data": "description" },

                    { "data": "actions", orderable: false, searchable: false },
                ],
                order: [ [0, 'desc'] ]
            });
        } );
    </script>
@endpush
