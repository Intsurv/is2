@extends('layouts.app')

@section('content')
<div class="card-header">Lebensmittel - aktueller Kühlschrankinhalt</div>
<div class="card-body custom-dashboard-card-body">
    @include('inc.messages') 
    <div class="table responsive">
          
        @if(count($foods)>0)
        <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">Kategorie</th>
                    <th scope="col">Anzahl</th>
                    <th scope="col">Hinzugefügt am</th>
                  </tr>
                </thead>
        @foreach($foods as $food)
            <tr>
                <td>{{$food->name}}</td>
            </tr>
            <tr>
                <td>{{$food->barcode}}</td>
            </tr>
            <tr>
                <td>{{$food->kategorie}}</td>
            </tr>
            <tr>
                <td>{{$food->anzahl}}</td>
            </tr>
            <tr>
                <td>{{$food->updated_at}}</td>
            </tr>
        @endforeach
    @else
        <p>Bisher keine Lebensmittel angelegt.</p>
    @endif

    </div>
</div>
</div>
@endsection