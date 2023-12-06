

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Boisson - BubbleMyTea</title>
    <style>
      span {
  float: right;
  line-height: 38px; /* Ajustez cela en fonction de la hauteur de votre champ de saisie */
}

    </style>
</head>
<body>

<x-navbar/>
<h1>Ajouter une boisson</h1>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


<form action="{{ route('boissons.store') }}" method="POST">
    @csrf
    
    <!-- <label for="image">Image :</label>
    <input type="file" name="image" accept="image/*"><br> -->

    <label for="nom">Nom du boisson:</label>
    <input type="text" name="nom" placeholder="Le nom"><br>

    <label for="ingredients">Ingrédients :</label>
    <input type="text" name="ingredients" placeholder="Ingrédients" require><br>

    <label for="categorie">Catégorie :</label>
    <select name="categorie" require>
        <option value="sucre">Sucré</option>
        <option value="sale">Salé</option>
        <option value="cafe">Café</option>
        <option value="the">Thé</option>
    </select><br>

    <label for="prix">Prix :</label>
<input type="number" name="prix" placeholder="Prix" step="float" required>
<span>&euro;</span><br>


    <label for="description">Description :</label>
    <textarea name="description" placeholder="Description" require></textarea><br>

    <button>Créer</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

