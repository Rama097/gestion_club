 @extends('layout')

@section('content') 
    <h1>Liste des clubs</h1>

    <a class="btn btn-success">Créer un club</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clubs as $club)
                <tr>
                    <td>{{ $club->id }}</td>
                    <td>{{ $club->nom }}</td>
                    <td>
                        <a href="{{ route('clubedit', $club->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('clubdestroy', $club) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
 @endsection 