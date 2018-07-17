@extends('layouts.app')

@section('content')
    <div class="card-header">Mein Kühlschrank</div>
    <div class="card-body custom-dashboard-card-body">
        @include('inc.messages')
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <a href="{{ route('add') }}">
                    <div class="card card-action card-action-add">
                        <span><i class="fa fa-plus"></i> Lebensmittel hinzufügen</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="{{ route('remove') }}">
                    <div class="card card-action card-action-remove">
                        <span><i class="fa fa-trash"></i> Lebensmittel entfernen</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
@endsection