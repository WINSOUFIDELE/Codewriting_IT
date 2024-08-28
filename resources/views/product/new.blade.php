<form action="{{ url('/product/new') }}" method="post">
    @csrf
    <label for="name">Nom</label>
    <input type="text" id="name" name="name" placeholder="Nom du produit" required>

    <label for="priceHt">Prix HT</label>
    <input type="number" id="priceHt" name="priceHt" placeholder="Prix hors taxe" required>

    <button type="submit">Ajouter</button>
</form>
