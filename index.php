


<!DOCTYPE html>
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
    #a1{
        height: 640px;
        background-image: url(assets/images/a1.png);
    }
    #a3{
        align-items: center;
        justify-content: center;
    }

    #a4{
        height: 600px;
        background-image: url(assets/images/a4.png);
    }
    #a2{
        margin-left: 37%;
        margin-right: 37%;


    }
</style>
</head>
<body>

<header>
    <div class="container-fluid bg-dark">
        <div class="row">
            <nav class="navbar navbar-light bg-light fixed-top">
              <div class="container-fluid" style="display: flex;">

                    <span style="justify-content: end;">
                        <a class="navbar-brand" href="#"><img src="assets/images/froma.png" style="margin-right: 250px; width: 350px;" alt=""></a>
                        <a  href="login.php"><button type="button" id="" class="btn btn-outline-success" >Connexion</button></a>
                        <a href="catalogue.php" ><button type="button" class="btn btn-outline-danger">Nos produits</button></a>
                    </span>
                

                
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                  aria-controls="offcanvasNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                  aria-labelledby="offcanvasNavbarLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <ul class="navbar-nav text-center flex-grow-1 pe-3">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">accueil</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="login.php" id="displayForm" >Compte Client/Admin</a>

                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="catalogue.php">Nos Produits</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="propos.php">à Propos</a>

                      </li>

                    </ul>

                  </div>
                  
                </div>
              </div>
            </nav>

        </div>
    </div>
</header>

    <div class="container-fluid" id="a1"></div>
    <div class="container" id="a3"><div class="row"><img src="assets/images/a2.png" style="height: 620px; padding: auto;"></div></div>
    
    <div class="container" >
        <a href="catalogue.php"><button  id="a2" class="btn btn-outline-danger" style="margin-top: 30px;margin-bottom: 30px;"><i class="fa-solid fa-bag-shopping"> </i>  Voir le Catalogue de produits</button></a>
    </div>
    <div class="container-fluid" id="a4"></div>

<footer id="contact">
  
  <div class="container-fluid" style="background-color: rgba(171, 233, 238, 0.623); display: flex; text-align: justify;"  >
  
    <div class="container"  >
      <h1 style="text-align: center;">Contact</h1><br>
      <div class="row" id="" >

        <div class="col-md-6">
            <div class="form-group">
              <label for="email">Nom:</label>
              <input class="form-control" type="text" name="name" id="" placeholder="Entrer votre nom complet">
              <label for="email">E-mail:</label>
              <input class="form-control" type="email" name="email" id="" placeholder="Entrer votre adresse email"> <br>
              <input type="text" cols="30" rows="10" name="" id="" class="form-control" placeholder="Entrer vos messages">
            </div>
        </div>
        <div class="col-md-6 text-center" >


         <br> <p >Vous pouvez nous écrire directement par là ou prendre nos contacte et s'abonner à FROMAGE grace au information ci-dessous.</p>
          <h5><i class="fa fa-phone" aria-hidden="true">+228 99 99 99 99</i></i></h5><h5><i class="fa fa-envelope-open" aria-hidden="true"></i> etudiants.univ@esig.tg</i></i></h5><h5><i class="fa-solid fa-location-dot"></i> bè,Kpota lomé-TOGO</h5>
          <br>  <i class="fa-brands fa-instagram" style="font-size: 37px;"></i> <i class="fa-brands fa-facebook" style="font-size: 37px;"></i> <i class="fa-brands fa-twitter" style="font-size: 37px;"></i>
         </div>
      </div>

    </div>
  </div>



  <div class="container-fluid" style="background-color: rgba(171, 233, 238, 0.623); display: flex; text-align: center;display: flex;" >

    <div class="row" id="foot2" style=" margin: auto;padding: auto;">
      <div class="col-md-12" >
        <br><img src="assets/images/froma.png" style="margin-left: px;width: 250px;justify-content: center;" alt=""><br>
        <h3 style="text-align: center;">GROUPE F</h3
      </div>

    </div>


  </div>
</footer>




 
</div>


 
</body>
</html>
