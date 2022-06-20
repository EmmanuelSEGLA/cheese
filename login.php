<?php
session_start();

include "config/commandes.php";

if(isset($_SESSION['xRttpHo0greL39']))
{
    if(!empty($_SESSION['xRttpHo0greL39']))
    {
        header("Location: admin/afficher.php");
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

    <link href="assets/css/bootstrapmorphe.min.css" rel="stylesheet">



    
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form method="post">
    <img class="mb-4" src="assets/images/jery.png" alt="" width="150" height="170">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="motdepasse">
      <label for="floatingPassword">Password</label>
    </div><br>

    <a href=""><button class="w-100 btn btn-md btn-outline-success" name="envoyer" value="Se connecter" type="submit">Sign in</button></a>
 <br><br>
    <p>Vous n'avez pas de compte? <a href="inscription.php">Inscrivez-vous maintenant.</a></p>

    
    <p class="mt-5 mb-3 text-muted">&copy; GROUP F</p>
  </form>
</main>

</body>
</html>

<?php

if(isset($_POST['envoyer']))
{
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
    {
        $login = htmlspecialchars(strip_tags($_POST['email'])) ;
        $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));

        $admin = getAdmin($login, $motdepasse);

        if($admin){
            $_SESSION['xRttpHo0greL39'] = $admin;
            header('Location: admin/afficher.php');
        }else{
            header('Location: index.php');
        }
    }

}

?>