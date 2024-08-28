@extends('layout')

@section('title', 'Détails de l\'Article')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <div class="mb-3">
        <label class="form-label"><strong>Contenu :</strong></label>
        <p>{{ $article->body }}</p>
    </div>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Retour</a>
    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifier</a>
    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
</div>
@endsection
