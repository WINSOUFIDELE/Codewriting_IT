<form action="{{ url('/product/edit/' . $product->id) }}" method="post">
    @csrf
    @method('POST')

    <label for="name">Nom</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}" placeholder="Nom du produit" required>

    <label for="priceHt">Prix HT</label>
    <input type="number" id="priceHt" name="priceHt" value="{{ $product->priceHt }}" placeholder="Prix hors taxe" required>

    <button type="submit">Modifier</button>
</form>
