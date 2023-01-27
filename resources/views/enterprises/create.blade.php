@extends('base')

@section('content')
{{-- to do --}}

{{-- @dump($errors->all()) --}}
<div class="container">
    <h1 class="text-center my-5">Créer une nouvelle entreprise</h1>
    <form action="{{ route('enterprises.store') }}" method="POST">
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Nom</label>
                <input type="text" name="name" class="form-control " placeholder="nom de l'entreprise">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Activite</label>
                <input type="text" name="activity" class="form-control " placeholder="activite de l'entreprise">
                @error('activity')
                <span class="invalid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            <div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Addresse</label>
                <input type="text" name="address" class="form-control " placeholder="adresse de l'entreprise">
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            <div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Téléphone</label>
                <input type="text" name="phone" class="form-control " placeholder="numéro de téléphone">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            <div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="validationServer01" class="form-label"> Site</label>
                <input type="text" name="site" class="form-control " placeholder="url du site">
                @error('site')
                <span class="invalid-feedback" role="alert">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            <div>
        </div>
                <div class="d-flex justify-content-center mb-5 mt-2 ">
                    <button id="btnFeedback" type="submit" class="btn btn-primary"> Enregistrer</button>
                </div>
    </form>
</div>



@endsection
