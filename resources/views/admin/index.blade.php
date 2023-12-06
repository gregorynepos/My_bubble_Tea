<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ajout boissons</title>

    <style>
        .content {
            margin: 4%;
        }

        .title-2 {
            text-align: center;
            margin: 2% 0 -2% 0;
            font-size: 35px;
        }

        /* Ajout d'un style pour l'image */
        .content img {
            width: 100%; /* Assure que l'image prend toute la largeur du conteneur */
            height: auto; /* Permet de conserver les proportions de l'image */
            margin-bottom: 10px; /* Ajout d'une marge en bas de l'image */
        }
    </style>
</head>
<body>
<x-navbar/>

<h1 class="title-2">
    Boissons servies:
</h1>
  
@extends('layouts.frontend')

@section('content')
    <div class="container px-6 mx-auto">
        <div class="d-flex justify-content-evenly">
            @foreach ($boissons as $boisson)
                <div class="content">
                    <!-- <img src="{{ $boisson->image }}" alt="{{ $boisson->nom }}"> -->
                    <h1>{{ $boisson->nom }}</h1>
                    <a href="{{ route('admin.show', $boisson->id) }}">Plus d'info sur le boisson</a><br>
                    <span class="mt-2 text-gray-500">${{ $boisson->prix }}</span>
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $boisson->id }}">
                        <input type="hidden" name="nom" value="{{ $boisson->nom }}">
                        <input type="hidden" name="ingredients" value="{{ $boisson->ingredients }}">
                        <input type="hidden" name="categorie" value="{{ $boisson->categorie }}">
                        <input type="hidden" name="prix" value="{{ $boisson->prix }}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
