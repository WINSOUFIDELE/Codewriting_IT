@extends('layout')

@section('title', 'Liste des Articles')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>Liste des Articles</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Ajouter un Article</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>N°</th>
            <th>Libellé</th>
            <th>Prix d'Achat</th>
            <th>Prix de Vente</th>
            <th>Description</th>
            <th>Observation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->libelle }}</td>
                <td>{{ $article->prix_achat }}</td>
                <td>{{ $article->prix_vente }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->observation }}</td>
                <td>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
