@extends('layouts.app')

@section('content')
    <div class="card-header">Lebensmittel hinzufügen</div>
    <div class="card-body custom-dashboard-card-body">
        @include('inc.messages')
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <a href="">
                    <div class="card card-grocery card-action-add">
                        <span><i class="fa fa-barcode"></i> Barcode Scannen</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="">
                    <a href="{{ route('manuallyAdd') }}">
                    <div class="card card-grocery card-action-add">
                        <span><i class="fa fa-keyboard"></i> Manuell hinzufügen</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
@endsection