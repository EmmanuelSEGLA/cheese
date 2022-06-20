<?php
session_start();

require("../config/commandes.php");

$Produits=afficher();


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrapmorphe.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <title>FROMAGE</title>
    <link rel="shortcut icon" href="../assets/images/jery - Copie.png" type="image/x-icon">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid bg-dark">
            <div class="row">
                <nav class="navbar navbar-light bg-light fixed-top">
                <div class="container-fluid" style="display: flex;">

                        <span style="margin-left: 0px;">
                            <a class="navbar-brand" href="#"><img src="../assets/images/froma.png" style="margin-right: 250px; width: 350px;" alt=""></a>
                            <a href="../admin/add.php"><button type="button" class="btn btn-outline-success">Nouveau</button></a>
                            <a href="../admin/afficher.php" ><button type="button" class="btn btn-outline-info">Nos produits</button></a>                       
                            <a  href="supprimer.php"><button type="button" class="btn btn-outline-warning">Suppression</button></a>
                            <a  href="><button type="button" id="" class="btn btn-outline-primary">Compte</button></a>
                            <a href="destroy.php" ><button type="button" class="btn btn-outline-danger">Déconnexion</button></a> 
                        </span><br>
                        <div class="container-fluid ">
                        <h5 style="color: #545659; opacity: 0.5;">Connecté en tant que: <?= $nom ?></h5>
                        </div>
                </div>
                </nav>
            </div>
        </div>
    </nav>

</header>


<div class="container-fluid text-center" style="margin-top:150px ;margin-bottom:50px;">
    <h2>Supprimer un Produit</h2>
</div>

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      	
<form method="post">
  <div class="mb-3">

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identifiant du produit</label>

    <input type="number" class="form-control" name="idproduit" required>
  </div>

  <button type="submit"  class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#myModal">Supprimer le produit</button>
</form>

      </div>



<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
      <?php foreach($Produits as $produit): ?> 
        <div class="col">
          <div class="card shadow-sm">
            
            <img src="<?= $produit->image ?>" style="size: 15%;">

            <h5><?= $produit->id ?> - <?= $produit->nom ?></h5>

            <div class="card-body">
            
            </div>
          </div>
        </div>
      <?php endforeach; ?>

</div>

    </div></div>



    <!-- ---modal---------------------------------------------------------------modal---------------------------------------------------------------------------- -->
    data-bs-toggle="modal" data-bs-target="#myModal"
    name="valider"  class="btn btn-primary"
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">supression</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h4>Etes-vous sur de vouloir supprimé ce Produit</h4>
       <button type="submit" class="btn btn-outline-danger" ><a style="text-decoration: none; color: white;"  name="valider">oui</a></button>
      <button type="button"  class="btn btn-outline-info"> <a href="supprimer.php" style="text-decoration: none; color: white;">non</a></button>
      
      </div>


    </div>
  </div>
</div>
    
</body>
</html>

<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['idproduit']))
    {
    if(!empty($_POST['idproduit']) AND is_numeric($_POST['idproduit']))
	    {
	    	$idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));

          try 
          {
            supprimer($idproduit);
            
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
	    	


	    }
    }
  }

?>