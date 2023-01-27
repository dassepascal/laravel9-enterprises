@extends('base')
@section('content')

<div class="jumbotron">


    <h2 class="display-4 text-start custom-title">{{ $enterprise->name}}</h2>
</div>
<div class="container">
    <div><p class=text-start my-3 pt-3>Activité : {{ $enterprise->activity}}</p></div>


   <div><p class=text-start my-3 pt-3>adresse : {{ $enterprise->address}}</p></div>
   <div><p class=text-start my-3 pt-3>téléphone : {{ $enterprise->phone}}</p></div>
   <div><p class=text-start my-3 pt-3>site : {{ $enterprise->site}}</p></div>

{{-- <div>
    <h5>Activité : <span class=" ">{{ $enterprise->activity }}</span></h5>

</div> --}}





<div class="d-flex justify-content-center my-5">
    <a class="btn btn-primary" href="{{ route('enterprises') }}">
        <i class="fas fa-arrow-left"></i>
        Retour
    </a>
</div>

</div>
@endsection
