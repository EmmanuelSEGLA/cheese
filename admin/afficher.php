<?php
session_start();
require("../config/commandes.php");

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
    <h2>Liste des Produits</h2>
</div>


<div class="album py-5 bg-light">
    <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">nom</th>
                <th scope="col">prix</th>
                <th scope="col">Description</th>
                <th scope="col">Editer</th>
                </tr>
            </thead>
            <tbody>
<?php foreach($produits as $produit): ?>
                <tr>
                <th scope="row"><?= $produit->id ?></th>
                <td>
                <img src="<?= $produit->image ?>" style="width: 15%">
                </td>
                <td><?= $produit->nom ?></td>
                <td style="font-weight: bold; color: green;"><?= $produit->prix ?>€</td>
                <td><?= substr($produit->description, 0, 100); ?>...</td>
                <td><a href="editer.php?id=<?= $produit->id ?>"><i class="fa fa-pen" style="font-size: 25px;color: green;"></i></a></td>
                </tr>      
<?php endforeach; ?>

            </tbody>
            </table>
    </div>
</div>
</div>

    
</body>
</html>

<?php


?>