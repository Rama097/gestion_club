@extends('layout')

@section('content') 
    <h1>Liste des activites</h1>

    <a class="btn btn-success">Créer une activite</a>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>IdClub</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activites as $activites)
                <tr>
                    <td>{{ $activites->id }}</td>
                    <td>{{ $activites->nom }}</td>
                    <td>{{ $activites->description }}</td>
                    <td>{{ $activites->idclub }}</td>
                    <td>
                        <a href="{{ route('clubs.edit', $activites->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('clubs.destroy', $activites->id) }}" method="POST" class="d-inline">
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