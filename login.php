
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>FROMAGE</title>
    <link rel="shortcut icon" href="assets/images/jery - Copie.png" type="image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    <link href="assets/css/bootstrapmorphe.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<?php
require('config.php');
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$_SESSION['username'] = $username;
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `admin` WHERE pseudo='$username' and motdepasse='".hash('sha256', $password)."' and active='1'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	
	if (mysqli_num_rows($result) == 1) {
		$user = mysqli_fetch_assoc($result);
		// vérifier si l'utilisateur est un administrateur ou un utilisateur
		if ($user['type'] == 'admin') {
			header('location: admin/afficher.php');		  
		}else{
			header('location: index.php');
		}
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>
    
<main class="form-signin w-100 m-auto">
  <form method="post">
    <img class="mb-4" src="assets/images/jery.png" alt="" width="150" height="170">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name-example" name="username">
      <label for="floatingInput">nom</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div><br>

    <a href=""><button class="w-100 btn btn-md btn-outline-success" name="envoyer" value="connexion " type="submit">Connexion</button></a>
 <br><br>
    <p>Vous n'avez pas de compte? <a href="inscription.php">Inscrivez-vous maintenant.</a></p>

    
    <p class="mt-5 mb-3 text-muted">&copy; GROUP F</p>
  </form>
  <?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</main>

</body>
</html>

