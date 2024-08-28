@extends('layout')

@section('title', 'Créer un Article')

@section('content')
<div class="container">
    <h1>Créer un Nouvel Article</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="libelle" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" id="libelle" name="libelle" required>
        </div>
        <div class="mb-3">
            <label for="prix_achat" class="form-label">Prix d'Achat</label>
            <input type="number" class="form-control" id="prix_achat" name="prix_achat" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="prix_vente" class="form-label">Prix de Vente</label>
            <input type="number" class="form-control" id="prix_vente" name="prix_vente" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="observation" class="form-label">Observation</label>
            <textarea class="form-control" id="observation" name="observation"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
