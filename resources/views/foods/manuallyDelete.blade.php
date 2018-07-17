@extends('layouts.app')

@section('content')
    <div class="card-header">Lebensmittel entfernen</div>
    <div class="card-body custom-dashboard-card-body">
        @include('inc.messages')
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <a href="{{ route('deleteFish') }}">
                    <div class="card card-grocery card-action-remove">
                        <span><i class="icon-meat"></i> Fisch & Fleisch</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <a href="{{ route('deleteMilk') }}">
                    <div class="card card-grocery card-action-remove">
                        <span><i class="icon-milk-products"></i> Milchprodukte</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <a href="{{ route('deleteVeg') }}">
                    <div class="card card-grocery card-action-remove">
                        <span><i class="icon-vegetable"></i> Obst & Gemüse</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <a href="{{ route('deleteBread') }}">
                    <div class="card card-grocery card-action-remove">
                        <span><i class="icon-bread"></i> Brot</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
@endsection