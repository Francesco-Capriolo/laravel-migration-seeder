@extends('layouts.main')


@section('main-content')
@dump($trains)
@foreach ($trains as $train)
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$train->Azienda}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Stazione di partenza: {{$train->StazioneDiPartenza}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Stazione di arrivo: {{$train->StazioneDiArrivo}}</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>
@endforeach

@endsection