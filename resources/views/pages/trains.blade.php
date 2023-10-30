@extends('layouts.welcome')




@section('main_content')



@foreach ($Trains as $train)

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$train->Azienda}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

    
@endforeach
@endsection