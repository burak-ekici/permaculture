<?php session_start();
      require_once(dirname(__DIR__) . '/controllers/UserController.php');
      if(isset($_SESSION["user"]) AND $_SESSION["user"] ==="ok"){}else{header("location:login.php");}
      $UserController = new UserController();
      $annonce = "";
      if(isset($_SESSION['username'])){$annonce = $UserController->edit($_SESSION['username']);}
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
    <link rel="stylesheet" href="../css/modifierCompte.css" />
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
            <li><a href="mailto:burakroxx@gmail.com">Contact</a></li>
            <?php if(isset($_SESSION["admin"]) || isset($_SESSION["user"])){  ?> <li><a href="modifierCompte.php">Mon compte</a></li> <?php } ?>
            <li><button class="btn btn-warning <?php if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){ ?> hide  <?php }  ?> btn-lg disconnectUser">deconnexion</button></li>
            
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
      
      <h1>Bienvenue <?php if(isset($_SESSION['user'])){ echo $_SESSION['username'];} ?></h1>
      
      <div class="formulaire">
        <form method="POST" action='modifierCompte.php'>
          
          <legend>Changer votre mot de passe</legend>
        
          <label for="Password" class="form-label">Ancien mot de passe </label>
          <input type="text" class="form-control" id="Password" name="oldPassword">
          
        
        
          <label for="Password32" class="form-label">Nouveau Mot de passe </label>
          <input type="password" class="form-control" id="Password2" name="newPassword">
        
        
          <label for="Password3" class="form-label">Retaper votre mot de passe:</label>
          <input type="password" class="form-control" id="Password3" name="checkPassword">
        
        
          <button type="submit" class="btn btn-success btn-lg centrer">Modifier</button>
        </form>
        <p class="annonce"><?php echo $annonce ?></p>
      </div>
      
      <div>
        <a href="supprimerCompte.php?id=<?php echo  $_SESSION['username'] ?>"><button class="btn btn-danger btn-lg deleteButton">Supprimer mon compte</button></a>
      </div>
      
      



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
    <script src="../javascript/modifierCompte.js"></script>
</body>
</html>