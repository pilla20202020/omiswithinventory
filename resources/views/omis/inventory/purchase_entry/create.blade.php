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
                <form class="form form-validate floating-label" action="{{route('inventory.purchaseentry.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                @include('omis.inventory.purchase_entry.partials.form',['header' => 'Create a Purchase Entry'])
                </form>
            </div>
        </div>
    </div>
</div>

@stop





