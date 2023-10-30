@extends('layouts.welcome')




@section('main_content')



@foreach ($Trains as $train)

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$train->Azienda}}</h5>
      <div class="card-text">{{$train->Stazione_di_partenza}}</div>
      <div class="card-text">{{$train->Stazione_di_arrivo}}</div>
      <div class="card-text">{{$train->Orario_di_partenza}}</div>
      <div class="card-text">{{$train->Orario_di_arrivo}}</div>
      <div class="card-text">{{$train->Codice_Treno}}</div>
      <div class="card-text">{{$train->Numero_Carrozze}}</div>
      <div class="card-text">{{$train->In_orario}}</div>
      <div class="card-text">{{$train->Cancellato}}</div>
    </div>
  </div>

    
@endforeach
@endsection