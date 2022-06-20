<?php

require("config/commandes.php");

  $Produits=afficher();

?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrapmorphe.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/connexionAclient.css">
    <title>FROMAGE</title>
    <link rel="shortcut icon" href="assets/images/jery - Copie.png" type="image/x-icon">
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>

    
  </head>
  <body>

  <header>
       <?php include("header.php"); ?>
    </header>

  <br><br><br><br><br>
    <div class="container text-center">
      <h2>CATALOGUE DE PRODUITS</h2>
     
    </div>
    


<main>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach($Produits as $produit): ?> 
        <div class="col">
          <div class="card shadow-sm">
            <h3><?= $produit->nom ?></h3>
            <img src="<?= $produit->image ?>" style="width: 70%;margin: auto;">

            <div class="card-body">
              <p class="card-text"><?= substr($produit->description, 0, 160); ?>...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 
                </div>
               
              </div>
              
            </div>
            
            <div class="card-footer">
            <small class="text" style="font-weight: bold;"><?= $produit->prix ?> €</small>      
            <a href="produit.php?pdt=<?= $produit->id ?>"><button type="button" class="btn btn-sm btn-outline-primary">Voir plus</button></a>
           
            </div>
          </div>
          
        </div>
  <?php endforeach; ?>


      </div>
    </div>
  </div>

</main>

<footer>
        
<div class="container">
              <div class="row" style="margin-bottom: 70px;margin-top: 20px;margin-left:35%;margin-right: 35%;">
              <a href="index.php"><button class="btn btn-md btn-outline-dark" style="justify-content: flex-end;"> Retourner à la page d'accueil</button></a>
              </div>
        </div>
        
</footer>

  </body>
</html>
