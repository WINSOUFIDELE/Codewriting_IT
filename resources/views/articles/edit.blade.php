@extends('layout')

@section('title', 'Modifier l\'Article')

@section('content')
<div class="container">
    <h1>Modifier l'Article</h1>
    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="libelle" class="form-label">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $article->libelle }}" required>
        </div>
        <div class="mb-3">
            <label for="prix_achat" class="form-label">Prix d'Achat</label>
            <input type="number" class="form-control" id="prix_achat" name="prix_achat" step="0.01" value="{{ $article->prix_achat }}" required>
        </div>
        <div class="mb-3">
            <label for="prix_vente" class="form-label">Prix de Vente</label>
            <input type="number" class="form-control" id="prix_vente" name="prix_vente" step="0.01" value="{{ $article->prix_vente }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $article->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="observation" class="form-label">Observation</label>
            <textarea class="form-control" id="observation" name="observation">{{ $article->observation }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Modifier</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
