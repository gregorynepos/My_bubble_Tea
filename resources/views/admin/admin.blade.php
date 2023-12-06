<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Admin - BubbleMyTea</title>
    <style>
      a{
        text-decoration: none;
        color: black;
      }
      .col{
        background-color: #A8AFB7;
        margin-right: 10px;
        padding: 5%;
       
      }

      .col a{
        text-decoration: none;
        color:#fff;
        font-size: 20px;
      } 
      .col a:hover{
        text-decoration: none;
        color:#fff;
        font-size: 25px;
      } 
      .row{
        margin-top: 7%;
      }
    </style>
</head>
<body>
<x-navbar/>

<div class="container text-center">
  <div class="row ">
    <div class="col">
      <a href="/boissons">Listes  des boisson servies</a>
    </div>
    <div class="col">
      <a href="/admin/boissons ">Ajouter une boisson</a>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>