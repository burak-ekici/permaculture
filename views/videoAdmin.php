<?php 
      session_start();
      require_once(dirname(__DIR__) . '/controllers/VideoController.php');
      $videoController = new VideoController();
      $data = $videoController->index();
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
    <link rel="stylesheet" href="../css/videoAdmin.css" />
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
      
      <div class="contain"> 
     
           <form class="formulaire" action="videoAdmin.php" method="POST">
              <legend>Ajouter une video :</legend>
                 <label for="titre">Titre</label>
                 <input type="text" name="titre"/>
                 
                 <label for="numero">Video n° : </label>
                 <input type="number" name="numero"/>
                 
                 <label for="link">Lien</label>
                 <textarea type="text" name="link"></textarea>
                 
                 <button class="btn btn-warning">Valider</button>
                 
                  <?php if(isset($data['annonce'])){
                            echo $data['annonce'];
                  }; ?>
                 
            </form>
            
            <div class="edit">
              <div style="margin-bottom:50px" >
                <button class="deconnecter btn btn-warning"><i class="fas fa-sign-out-alt"></i> Se deconnecter</button>
              </div> 
                <h1>Video(s) existant(s) :</h1>
                <ul>
                   
                   <?php  foreach ($data['videos'] as $video){ ?>
                     
                     <li>
                         <span class="numero"><?php echo $video["numero"] ?> </span>
                         <span class="titre"><?php echo $video["titre"] ?> </span>
                         <div class="action">
                         <a href="modifier.php?id=<?php echo $video['numero'] ?>"><i class="fas fa-edit"></i></a>
                         <a href="supprimer.php?id=<?= $video['numero'] ?>"><button class="btn btn-danger">x</button></a>
                         </div>
                     </li>
                    
                    <?php } ?>
                </ul>
                
               
            </div>
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
      
      
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    
    <script src="../javascript/video.js"></script>
</body>
</html>