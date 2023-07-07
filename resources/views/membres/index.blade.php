@extends('layout')

@section('content') 
    <h1>Liste des membres</h1>

    <a class="btn btn-success">Créer un membre</a>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>
        </thead>
        <tbody>
            @foreach($membres as $membres)
                <tr>
                    <td>{{ $membres->id }}</td>
                    <td>{{ $membres->nom }}</td>
                    <td>{{ $membres->prenom }}</td>
                    <td>
                        <a href="{{ route('clubs.edit', $membres->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('clubs.destroy', $membres->id) }}" method="POST" class="d-inline">
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