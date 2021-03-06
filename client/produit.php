<?php

require("config/commandes.php");

$Produits=afficher();

if(isset($_GET['pdt'])){
    
    if(!empty($_GET['pdt']) OR is_numeric($_GET['pdt']))
    {
        $id = $_GET['pdt'];

    }
}

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

</head>
<body>

<header>
<div class="collapse bg-dark" id="navbarHeader">
<div class="container">
    <div class="row">
    <div class="col-sm-8 col-md-7 py-4">
        <h4 class="text-white">About</h4>
        <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
    </div>
    <div class="col-sm-4 offset-md-1 py-4">
        <h4 class="text-white">Sign in</h4>
        <ul class="list-unstyled">
        <li><a href="login.php" class="text-white">Se connecter</a></li>
        </ul>
    </div>
    </div>
</div>
</div>
<div class="navbar navbar-dark bg-dark shadow-sm">
<div class="container">
    <a href="#" class="navbar-brand d-flex align-items-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
    <strong>MonoShop</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
</div>
</div>
</header>

<main>

<div class="album py-5 bg-light">
<div class="container" style="display: flex; justify-content: center">

    <div class="row">
<div class="col-md-2"></div>
<?php foreach($Produits as $produit){ if($produit->id == $id){ ?> 
        <div class="col-md-8">
            <div class="card shadow-sm" >
                <br>
                <h3 align="center"><?= $produit->nom ?></h3>
                <img src="<?= $produit->image ?>" style="width: 45%; margin: auto;">

                <div class="card-body">
                <p class="card-text"><?= $produit->description ?></p>
                <div class="d-flex justify-content-between align-items-center">

                </div>

            </div>
            <div class="card-footer">
                <div class="btn-group">
                    <a href="produit.php?pdt=<?= $produit->id ?>"><button type="button" class="btn btn-md btn-outline-success">Commander</button></a>
                    </div>
                    <small class="text" style="font-weight: bold;"><?= $produit->prix ?> ???</small>
                </div>
                </div>
            </div>
<?php }} ?>

<div class="col-md-2"></div>
    </div>
</div>
</div>

</main>
<footer>
        
<div class="container">
              <div class="row" style="margin-bottom: 70px;margin-top: 20px;margin-left:35%;margin-right: 35%;">
              <a href="catalogue.php"><button class="btn btn-md btn-outline-dark" style="justify-content: flex-end;"> Retourner au catalogue</button></a>
              </div>
        </div>
        
</footer>
<br>
<br>
<br>
<br>
</body>
</html>
