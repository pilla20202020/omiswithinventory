@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="nk-content-inner">
                <form method="get" action="{{ route('form.store') }}" enctype="multipart/form-data">
                    {{ customCreateSelect('type', 'type', '', '', ['curd' => 'curd', 'create' => 'create', 'store' => 'store', 'update' => 'update']) }}
                    {{ createText('tableName', 'tableName', 'Table Name') }}
                    {{ createText('directoryName', 'directoryName', 'Directory Name') }}
                    <?php createButton('mt-3 btn-primary', '', 'Submit'); ?>
                </form>
            </div>
        </div>
    </div>
@endsection
