<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Ajouter un boisson</title>

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

<div class="container">
  <h1>Ajouter une boisson</h1><br><br>
  <form action="{{ route('boissons.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
<!-- 
    <label for="image">Image :</label>
    <input type="file" name="image" accept="image/*"><br>
   -->
    <label for="nom">Nom du boisson:</label>
    <input type="text" name="nom" placeholder="Le nom"><br>

    <label for="ingredients">Ingrédients :</label>
    <input type="text" name="ingredients" placeholder="Ingrédients"><br>

    <label for="categorie">Catégorie :</label>
    <select name="categorie">
        <option value="sucre">Sucré</option>
        <option value="sucre">Aside</option>
        <option value="sale">Salé</option>
        <option value="cafe">Café</option>
        <option value="the">Thé</option>
    </select><br>

    <label for="prix">Prix :</label>
    <input type="number" name="prix" placeholder="Prix"><span>&euro;</span><br>

    <label for="description">Description :</label>
    <textarea name="description" placeholder="Description"></textarea><br>

    <button type="submit">Ajouter</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
