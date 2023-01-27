@extends('base')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 mt-5">
    <div class="container-fluid ">
        <h1 id="evenements" class="display-3 text-center h1" >Entreprises </h1>

        <div class="stones row justify-content-center ">

            @foreach ($enterprises as $enterprise)

            <div class="col-md-6 col-sm-12">
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title custom-title ">{{ $enterprise->name }}</h5>
                          <div>
                {{-- <h5 class="categorie">Categorie : <span class="category_color">{{ $stone->category->label }}</span></h5> --}}

            </div>
                        <p class="card-text">
                             {{ $enterprise->activity }}
                        </p>
                        <a href="{{ route('enterprise',$enterprise->slug) }}" class="btn btn-primary text-light"> Lire
                            la
                            suite</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">  {{ $enterprises->links('vendor.pagination.custom') }}      </div>
    </div>

</div>
@endsection
