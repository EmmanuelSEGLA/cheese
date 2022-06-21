
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>FROMAGE</title>
    <link rel="shortcut icon" href="../assets/images/jery - Copie.png" type="image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    <link href="../assets/css/bootstrapmorphe.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
    <style>
     .sucess{
        margin:auto;
        padding:auto;
     }    

    </style>


</head>
<body>
<?php
require('../config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	// récupérer le type (user | admin)
	$type = stripslashes($_REQUEST['type']);
	$type = mysqli_real_escape_string($conn, $type);
	
    $query = "INSERT into `admin` (pseudo, email, type, motdepasse)
				  VALUES ('$username', '$email', '$type', '".hash('sha256', $password)."')";
    $res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='sucess'>
         
             <h2>L'utilisateur a été créée avec succés.</h2>
             <h3>Cliquez ici pour retourner à votre <a href='afficher.php'>Espace de travail</a></h3>
			 </div>";
    }
}else{
?>
<main class="form-signin w-100 m-auto">
  <form method="post">
    <img class="mb-4" src="../assets/images/jery.png" alt="" width="150" height="170">
    <h1 class="h3 mb-3 fw-normal">Créer un Compte</h1>


    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name-example" name="username" required />
      <label for="floatingInput">Nom complet</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email" required />
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
			<select class="form-control" name="type" id="type" >
				<option value="" disabled selected>   Type</option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
	</div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword"  name="password" placeholder="Mot de passe" required />
      <label for="floatingPassword">Password</label>
    </div><br>

    <a href=""><button class="w-100 btn btn-md btn-outline-success" name="submit" value="S'inscrire" " type="submit">Soumettre</button></a>
 <br><br>
 

    
    <p class="mt-5 mb-3 text-muted">&copy; GROUP F</p>
  </form>
</main>
<?php } ?>

</body>
</html>