@extends('base')

@section('content')
{{-- to do --}}


<div class="container">
    <h1 class="text-center my-5">Modifier une  entreprise</h1>
    <form action="{{ route('enterprises.update',$enterprise->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Nom</label>
                <input type="text" value="{{  $enterprise->name }}" name="name" class="form-control " placeholder="nom de l'entreprise">
                @error('name')
                <span class="valid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Activite</label>
                <input type="text" value="{{ $enterprise->activity }}" name="activity" class="form-control " placeholder="activite de l'entreprise">
                @error('activity')
                <span class="valid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            <div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Addresse</label>
                <input type="text" value="{{ $enterprise->address }}" name="address" class="form-control " placeholder="adresse de l'entreprise">
                @error('address')
                <span class="valid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            <div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Téléphone</label>
                <input type="text" value="{{ $enterprise->phone }}" name="phone" class="form-control " placeholder="numéro de téléphone">
                @error('phone')
                <span class="valid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            <div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Site</label>
                <input type="text" value="{{ $enterprise->site }}" name="site" class="form-control " placeholder="url du site">
                @error('site')
                <span class="valid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            <div>
        </div>
                <div class="d-flex justify-content-center mb-5 mt-2 ">
                    <button type="submit" class="btn btn-primary"> Modifier une entreprise</button>
                </div>
    </form>
</div>



@endsection
