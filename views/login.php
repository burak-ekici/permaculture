
<?php 
      session_start();
      require_once(dirname(__DIR__) . '/controllers/UserController.php');
      $UserController = new UserController();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MaPermaculture</title>
    <script
      src="https://kit.fontawesome.com/cf4172360c.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Goldman&family=Montserrat:wght@700&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/login.css" />
  </head>
<body>
    
    <header>
      <div class="header_div1">
        <div class="menu-burger-JS">
          <i class="fas fa-bars"></i>
          <i class="fas fa-times displayNone"></i>
        </div>

        <nav class="nav-burger">
          <ul>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="permaculture.php">Permaculture</a></li>
            <li><a href="#">Commencer son potager</a></li>
            <li><a href="video.php">Vidéos</a></li>
            <li><a href="index.php#formulaire">Contact</a></li>
            <span class="icon-burger">
              <a href="mailto:burakroxx@gmail.com"><i class="fas fa-envelope"></i></a>
              <a href="https://www.facebook.com/geofflawtononline/"><i class="fab fa-facebook-square"></i></a>
              <a href="https://www.youtube.com/channel/UCL_r1ELEvAuN0peKUxI0Umw"><i class="fab fa-youtube"></i></a>
            </span>
          </ul>
        </nav>

        <div class="toggle-btn">
          <div class="on-off"></div>
        </div>
      </div>
    </header>
    
    <main>
        <!--LOGS POUR CORRECTEURS : identifiant : azerty   password :   azerty-->
        
        
        <div class="creationCompte">
          <p>Pas encore de compte ? <a href="creation.php">Cliquez ici pour en creer un</a></p>
        </div>
        
          

        <?php $error = $UserController->checkAdmin(); ?>
        <form method="POST" action="login.php">
                  
                  <h3>Se connecter</h3>
                  
                  <label for="username">Identifiant : </label>
                  <input type="text" name="username"/>
                  <label for="password">Mot de Passe : </label>
                  <input type="password" name="password"/>
                  
                  <button class="btn btn-primary">Se Connecter</button>
        
                  <div><?php if(isset($error)) echo $error  ?></div>
        </form>
          
        
        
       
        
    </main>
    
    <footer>

      <ol >
        <li><a href="index.php">Acceuil</a></li>
        <li><a href="permaculture.php">Permaculture</a></li>
        <li><a href="#">Commencer son portager</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="#">Boutique</a></li>
        <li><a href="login.php" class="admin">admin</a></li>
      </ol>
      <ul>
        <li><a href="mailto:burakroxx@gmail.com"><i class="fas fa-envelope"></i></a></li>
        <li><a href="https://www.facebook.com/geofflawtononline/"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCL_r1ELEvAuN0peKUxI0Umw"><i class="fab fa-youtube"></i></a></li>
        
      </ul>   
      
      <p>
        <i class="far fa-copyright"></i> COPYRIGHT 2020 - MaPermaculture.fr -
        Tous Droits Réservés
      </p>
      </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../javascript/login.js"></script>
</body>
</html>