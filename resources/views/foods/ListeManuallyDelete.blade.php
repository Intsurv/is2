@extends('layouts.app')

@section('content')
<div class="card-header">Lebensmittel - aktueller Kühlschrankinhalt</div>
<div class="card-body custom-dashboard-card-body">
    @include('inc.messages') 

    @if(count($foods)>0)
        @foreach($foods as $food)
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action list-group-item-warning"> <h6>{{$food->name}}</h6>
                    <small> Barcode: {{$food->barcode}}</br>
                            Anzahl: {{$food->anzahl}}</br>
                             Hinzugefügt am: {{$food->updated_at}}
                    </small></a>
              </div>    
        @endforeach
    @else
        <p>Bisher keine Lebensmittel angelegt.</p>
    @endif
</div>
</div>
@endsection