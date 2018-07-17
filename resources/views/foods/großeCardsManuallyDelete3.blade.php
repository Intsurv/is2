@extends('layouts.app')

@section('content')
<div class="card-header">Lebensmittel - aktueller Kühlschrankinhalt</div>
<div class="card-body custom-dashboard-card-body">
    @include('inc.messages') 

    @if(count($foods)>0)
        @foreach($foods as $food)
            <div class="card card-action card-action-remove">
                <div class="card-body">     
                    <h3>{{$food->name}}</h3>
                    <small> Barcode: {{$food->barcode}}</br>
                            Anzahl: {{$food->anzahl}}</br>
                             Hinzugefügt am: {{$food->updated_at}}
                    </small>
                </div>
          </div>    
        @endforeach
    @else
        <p>Bisher keine Lebensmittel angelegt.</p>
    @endif
</div>
</div>
@endsection