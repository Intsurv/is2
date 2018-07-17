@extends('layouts.app')

@section('content')
    <div class="card-header">Lebensmittel entfernen</div>
    <div class="card-body custom-dashboard-card-body">
        @include('inc.messages')
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <a href="">
                    <div class="card card-action card-action-remove">
                        <span><i class="fa fa-barcode"></i> Barcode Scannen</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="">
                    <a href="{{ route('manuallyDelete') }}">
                    <div class="card card-action card-action-remove">
                        <span><i class="fa fa-keyboard"></i> Manuell entfernen</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
@endsection