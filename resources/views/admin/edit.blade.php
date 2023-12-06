

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Document</title>

    <style>
        
    .container {
        justify-content: center;
        text-align: center;
        background-color:#6e6e6e59;
        padding: 20px; 
        border-radius: 10px;
        margin-top: 20px; 
        box-shadow: 0px 2px 20px 0px;
    }
 

      

        input, select, textarea {
            background-color: #555;
            color: #fff; 
            border: 1px solid #777;
            border-radius: 5px;
            margin-bottom: 10px; 
            padding: 8px; 
        }

        input[type="file"] {
            color: #fff;
        }

        button {
            width: 150px;
            background-color: #777; 
            color: #fff;
            border: none; 
            padding: 10px 20px;
            border-radius: 5px; 
            cursor: pointer;
        }

        button:hover {
            background-color: #888; 
        }
    </style>
</head>
<body>
<x-navbar/>

<form action="{{ route('boissons.update', $boisson->id) }}" method="POST" class="container">
    @csrf 
    @method('PUT')
    <h1>Modifier un boissons</h1>
    <!-- <label for="image">Image :</label>
    <input type="file" name="image" accept="image/*"><br>
     -->
    <label for="nom">Nom du boisson:</label>
    <input type="text" name="nom" placeholder="Le nom" Value="{{ $boisson->nom}}"><br>

    <label for="ingredients">Ingrédients :</label>
    <input type="text" name="ingredients" placeholder="Ingrédients"  Value="{{ $boisson->ingredients}}"><br>

    <label for="categorie">Catégorie :</label>
    <select name="categorie"  Value="{{ $boisson->categorie}}">
        <option value="sucre">Sucré</option>
        <option value="sale">Salé</option>
        <option value="cafe">Café</option>
        <option value="the">Thé</option>
    </select><br>

    <label for="prix">Prix :</label>
    <input type="number" name="prix" placeholder="Prix"  Value="{{ $boisson->prix}}"><span>&euro;</span><br>

    <label for="description">Description :</label>
    <textarea name="description" placeholder="Description"  >{{ $boisson->description }}</textarea><br>

    <button>Modifier</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>

