<?php
session_start();

require("../config/commandes.php");



if(!isset($_SESSION['xRttpHo0greL39']))
{
    header("Location: ../login.php");
}

if(empty($_SESSION['xRttpHo0greL39']))
{
    header("Location: ../login.php");
}


foreach($_SESSION['xRttpHo0greL39'] as $i){
  $nom = $i->pseudo;
  $email = $i->email;
}

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



  <div class="container-fluid text-center" style="margin-top:100px ;margin-bottom:10px;">
    <h2>Modifier les données du produit</h2>
</div>


  <div class="album py-5 bg-light">
    <div class="container" style="margin-left: 35%;margin-right: 35%; " >

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      
        <form method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">L'image du produit</label>
            <input type="name" class="form-control" name="image" required>

          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" name="nom"  required>
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" required>
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea class="form-control" name="desc" required></textarea>
          </div>

          <button type="submit" name="valider"class="btn btn-outline-success" style="margin-left: 25%;margin-right: 25%; ">Ajouter un nouveau produit</button>
        </form>

      </div>
    </div></div>

    
</body>
</html>

<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['desc']))
    {
    if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['desc']))
	    {
	    	$image = htmlspecialchars(strip_tags($_POST['image']));
	    	$nom = htmlspecialchars(strip_tags($_POST['nom']));
	    	$prix = htmlspecialchars(strip_tags($_POST['prix']));
	    	$desc = htmlspecialchars(strip_tags($_POST['desc']));
          
          try 
          {
            ajouter($image, $nom, $prix, $desc);
            header('Location: afficher.php');
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>