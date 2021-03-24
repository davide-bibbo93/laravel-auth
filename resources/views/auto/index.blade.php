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

                        <a href="{{ route('auto.show', ['auto' => $car]) }}">
                            <button class="btn btn-primary">
                                <i class="fas fa-eye"></i>
                            </button>
                        </a>

                        <a href="{{ route('auto.edit', ['auto' => $car]) }}">
                            <button class="btn btn-success">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>

                        <form action="{{ route('auto.destroy', ['auto' => $car]) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
