@extends('base')

@section('content')
<div class="container">

    <h1 class="text-center my-5">Enterprises</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-4" href="{{  route('enterprises.create') }}">ajouter une entreprise</a>
    </div>
    <table class="table table-hover">
        <thead>
          <tr class="table-active">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($enterprises as $enterprise )


          <tr >
            <th>{{  $enterprise->id }}</th>
            <td>{{  $enterprise->name }}</td>
            <td class="d-flex">
                <a href="{{ route('enterprises.edit',$enterprise->id) }}" class="btn btn-warning mx-3"> Editer</a>
                 <form action="{{ route('enterprises.delete',$enterprise->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger"
                    onclick="document.getElementById('modal-open-{{ $enterprise->id }}').style.display='block'">Supprimer</button>
                    <div class="modal" id='modal-open-{{ $enterprise->id }}'>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">La suppression d'un element est definitive </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        onclick="document.getElementById('modal-open-{{ $enterprise->id }}').style.display='none'"
                                        aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Etes vous sur de vouloir supprimé! </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">oui</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        onclick="document.getElementById('modal-open-{{ $enterprise->id }}').style.display='none'">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </td>

          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mt-5">{{ $enterprises->links('vendor.pagination.custom') }}
    </div>
</div>



@endsection
