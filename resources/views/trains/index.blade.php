@extends('layouts.main')


@section('main-content')
<div class="row row-cols-1 row-cols-md-3 g-4 my-3">
@foreach ($trains as $train)
    <div class="col">
        <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">
                Azienda: {{$train->companyName}}
            </h5>
            <p class="card-text">Stazione di partenza: {{$train->departureStation}}</p>
            <p class="card-text">Stazione di arrivo: {{$train->arrivalStation}}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href='{{route("trains.show",$train->id)}}' class="btn btn-primary">Vai ai dettagli del treno</a></small>
        </div>
        </div>
    </div>
@endforeach
</div>
<div class="col-12 col-md-6 offset-md-5">
    {{$trains->links()}}
</div>
@endsection
