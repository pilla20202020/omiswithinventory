@extends('omis.partials.layouts')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TableTools.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}" />
@endsection

@section('title', 'Sale')

@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h3 class="card-title">All Sale List</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li><a href="{{ route('inventory.sale.create') }}"
                                            class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                            data-bs-target=""><em class="icon ni ni-plus"></em><span>Add</span></a></li>
                                    <li><a href="{{ route('inventory.sale.create') }}"
                                            class="btn btn-primary d-none d-md-inline-flex"><em
                                                class="icon ni ni-plus"></em><span>Add sale</span></a></li>
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
                                            <th>Customer Name</th>
                                            <th>Invoice No</th>
                                            <th>Buying Date</th>
                                            <th>Visibility</th>
                                            <th>Availability</th>
                                            <th>Status</th>
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
        </div>
    </div>
@endsection


@section('page-specific-scripts')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": '{{ route('inventory.sale.data') }}',
                // dom: 'Bfrtip',
                // buttons: [
                //     'copy', 'csv', 'excel', 'pdf', 'print',
                //     // exportOptions: {
                //     //     columns: 'th:not(:last-child)'
                //     // }
                // ],
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excel',
                    text: 'Export Search Results',
                    className: 'btn btn-default',
                    exportOptions: {
                        columns: 'th:not(:last-child)'
                    }
                }],
                "columns": [{
                        "data": "id",
                        'visible': false
                    },
                    {
                        "data": "DT_RowIndex",
                        orderable: false,
                        searchable: false
                    },
                    {
                        "data": "customer"
                    },
                    {
                        "data": "invoice_no"
                    },
                    {
                        "data": "buying_date"
                    },
                    {
                        "data": "visibility"
                    },
                    {
                        "data": "availability"
                    },
                    {
                        "data": "status"
                    },
                    {
                        "data": "actions",
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [0, 'desc']
                ]
            });
        });
    </script>
@endsection
