<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une boisson</title>
</head>
<body>

<h1>Modifier une boisson</h1>
<form action="{{ route('boissons.update', $boisson) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="nom">Nom de la boisson:</label>
    <input type="text" name="nom" placeholder="Le nom" value="{{ $boisson->nom }}"><br>

    <label for="ingredients">Ingrédients :</label>
    <input type="text" name="ingredients" placeholder="Ingrédients" value="{{ $boisson->ingredients }}"><br>

    <label for="categorie">Catégorie :</label>
    <select name="categorie">
        <option value="sucre" {{ $boisson->categorie === 'sucre' ? 'selected' : '' }}>Sucré</option>
        <option value="sale" {{ $boisson->categorie === 'sale' ? 'selected' : '' }}>Salé</option>
        <option value="cafe" {{ $boisson->categorie === 'cafe' ? 'selected' : '' }}>Café</option>
        <option value="the" {{ $boisson->categorie === 'the' ? 'selected' : '' }}>Thé</option>
    </select><br>

    <label for="prix">Prix :</label>
    <input type="number" name="prix" placeholder="Prix" value="{{ $boisson->prix }}"><span>&euro;</span><br>

    <label for="description">Description :</label>
    <textarea name="description" placeholder="Description">{{ $boisson->description }}</textarea><br>

    <button type="submit">Modifier</button>
</form>

</body>
</html>
