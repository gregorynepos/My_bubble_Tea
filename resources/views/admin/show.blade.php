    <!DOCTYPE html>
    <html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
     <title>Document</title>
        <style>
          h1
          {
            margin: 2% 0 2% 0;
            text-align: center;
          }

          p{
            
            text-align: center;
          }

          a{
            text-decoration: none;
            color: black;
            font-size:20px;
          }

          .button, .buttons {
              border: none;
              border-radius: 10px;
              padding: 8px;
              margin-top: 5%;
          }

      .button {
        margin-right: -50%;
      }

      .buttons {
        margin-left: -50%;
      }

          </style>
    </head>
    <body>
      <x-navbar/>
                <!-- <a href="/boissons">retour</a> -->
                <img src="{{ $boisson->ingredients }}" alt=""> 
                    <h1>{{ $boisson->nom }}</h1>
                    <p>Ingredients : {{ $boisson->ingredients }}</p>
                    <p>Categorie : {{ $boisson->categorie }}</p>
                    <p>Prix : {{ $boisson->prix }}</p>
                    <p>Description : {{ $boisson->description }}</p>
                    
        <div class="container text-center">
          <div class="row ">
              <div class="col">
                  <a href="{{ route('admin.edit', $boisson->id) }}">
                      <button class="button">Editer</button>
                  </a>
              </div>
              <div class="col ">
                  <form action="{{ route('boissons.destroy', $boisson->id) }}" method="post">
                      @csrf 
                      @method('DELETE')

                      <button type="submit" class="buttons">Supprimer</button>
                  </form>    
              </div>
          </div>
        </div>
      

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    </body>
    </html>
