@extends('template.base')

@section('title', 'Index Auto')

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Modello</th>
                <th scope="col">Capacità Cubica</th>
                <th scope="col">Velocità massima</th>
                <th scope="col">Immagine</th>
                <th scope="col">Dettagli</th>
                @auth
                    <th scope="col">
                        <a href="{{ route('auto.create') }}">
                            <button class="btn btn-light">
                                <i class="fas fa-plus">Crea Macchina</i>
                            </button>
                        </a>
                    </th>
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($auto as $car)
                <tr>
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->model_name }}</a></td>
                    <td>{{ $car->cubic_capacity }}</td>
                    <td>{{ $car->max_speed }}</td>
                    <td><img src="{{ $car->pic }}" width="150" /></td>
                    <td>

                        <a href="{{ route('public.auto.show', ['auto' => $car]) }}">
                            <button class="btn btn-primary">
                                <i class="fas fa-eye"></i>
                            </button>
                        </a>

                        @auth

                            <a href="{{ route('auto.edit', ['auto' => $car]) }}">
                                <button class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#exampleModalCenter{{ $car->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <div class="modal fade" id="exampleModalCenter{{ $car->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Cancellazione</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Sei sicuro di voler cancellare definitivamente questa macchina?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                                            <form action="{{ route('auto.destroy', ['auto' => $car]) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Cancella</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
