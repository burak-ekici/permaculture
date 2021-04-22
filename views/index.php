<?php session_start(); ?>
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
    <link rel="stylesheet" href="../css/style.css" />
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
            <li><a href="index.php">Accueil</a></li>
            <li><a href="permaculture.php">Permaculture</a></li>
            <li><a href="#">Commencer son potager</a></li>
            <li><a href="video.php">Vidéos</a></li>
            <li><a href="index.php#formulaire">Contact</a></li>
            
            <?php if(isset($_SESSION["admin"]) || isset($_SESSION["user"])){  ?> <li><a href="modifierCompte.php">Mon compte</a></li> <?php } ?>
            <li><button class="btn btn-warning <?php if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){ ?> hide  <?php }  ?> btn-lg disconnectUser">deconnexion</button></li>
            
            <li><button class="btn btn-primary <?php if(isset($_SESSION["admin"]) || isset($_SESSION["user"])){  ?> hide <?php } ?> btn-lg connectUser">connexion</button></li>
            
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

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body text-center">
        Vous devez être connecté pour acceder à la section Video
      </div>
      <div class="modal-footer">
        <button type="button" onclick="closeModal()" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>  

      
    

    <main>
      <div class="logo">
        <h2 id="titre-principal">MaPermaculture.fr</h2>
        
        <!--nuage d'animation-->
        <div class="clouds">
          <img src="../img/cloud2.png" alt="cloud" style="--i: 1" />
          <img src="../img/cloud3.png" alt="cloud" style="--i: 2" />
          <img src="../img/cloud4.png" alt="cloud" style="--i: 3" />
          <img src="../img/cloud1.png" alt="cloud" style="--i: 4" />
          <img src="../img/cloud5.png" alt="cloud" style="--i: 5" />
          <img src="../img/cloud2.png" alt="cloud" style="--i: 6" />
          <img src="../img/cloud3.png" alt="cloud" style="--i: 7" />
          <img src="../img/cloud4.png" alt="cloud" style="--i: 8" />
          <img src="../img/cloud1.png" alt="cloud" style="--i: 9" />
          <img src="../img/cloud5.png" alt="cloud" style="--i: 10" />
        </div>
      </div>

      <div class="partieDeux">
        <div class="definition">
          <h3>La permaculture c'est quoi ?</h3>
          <p>
            La permaculture reproduit ce que fait la nature. Les êtres vivants,
            animaux et végétaux, y vivent en équilibre, le sol est nourri par
            les plantes qui y poussent puis y meurent, les végétaux de grande
            taille protègent les plus fragiles du vent et du soleil brûlant, les
            plantes y sont adaptées au sol et au climat, et elles se ressèment
            toutes seules… Dans un jardin en permaculture, le jardinier agit un
            peu comme un chef d’orchestre : il veille à l’harmonie générale mais
            laisse chaque instrument jouer sa partition.
          </p>
          <p>
            Un jardin en permaculture représente donc un système presque
            autonome, pérenne, où le jardinier laisse faire la nature au lieu
            d’aller contre elle. Il met à profit les interactions naturelles
            plutôt que de corriger en permanence un système rendu artificiel. Il
            compose avec la biodiversité et le recyclage naturel de la matière,
            plutôt que de viser la monoculture à grand renfort de pesticides et
            d’engrais chimiques.
          </p>
          <a href="permaculture.php">
            <button type="button" class="btn btn-primary btn-lg d-block">
            En savoir plus
            </button>
          </a>
        </div>

        <div class="natureDuSol">
          <h3>Connaitre la nature de mon sol</h3>
          <p>
            Quelle terre pour la permaculture ? Afin de faire son sol en
            permaculture il est essentiel de découvrir la terre de votre potager
            pour la rendre fertile. Dès le début vous avez intérêt à analyser
            votre sol. En terme de structure, est-ce un argile lourd et collant
            ou un terrain sableux et bien drainées ? Quant à la composition
            est-il alcalin, acide, ou neutre ?
          </p>
          <p>
            En effet les végétaux plongent leur racines dans le sol pour y
            puiser les élément nécessaires à leur existence. Le sol se compose
            de sables, de limons, d’argiles (minérale qui lui donne sa texture)
            et d’humus (matières organiques). Suivant la proportion de ces
            éléments, il existe plusieurs types de sol
          </p>
          <a href="commencer.php">
            <button type="button" class="btn btn-primary btn-lg d-block">
            En savoir plus
            </button>
          </a>  
        </div>
      </div>

      <h3 class="titre3 mt-5">Quoi planter ?</h3>

      <div class="cards">
        <div class="card-ete">
          <div class="card-image"></div>
          <div class="card-text">
            <h4>ETE</h4>
          </div>
        </div>

        <div class="card-automne">
          <div class="card-image"></div>
          <div class="card-text">
            <h4>AUTOMNE</h4>
          </div>
        </div>

        <div class="card-hiver">
          <div class="card-image"></div>
          <div class="card-text">
            <h4>HIVER</h4>
          </div>
        </div>

        <div class="card-printemp">
          <div class="card-image"></div>
          <div class="card-text">
            <h4>PRINTEMPS</h4>
          </div>
        </div>
      </div>

      <div class="video">
        <iframe
          width="600"
          height="300"
          src="https://www.youtube.com/embed/ejMHuRzYlmE"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <div class="paragraphe">
          <p class="discour">
            Ce film couvre une grande partie de la problématique: une brève
            introduction à la Permaculture, des histoires personnelles sur mes
            débuts, un aperçu du projet Greening the Desert et de la ferme
            Zaytuna, et plus encore. C'est la première vidéo d'une «Masterclass
            de Permaculture» en 4 parties dans laquelle j'essaie de partager le
            quoi, comment et pourquoi de la Permaculture, ainsi que pourquoi il
            est si important que nous apprenions et appliquions immédiatement
            cette science de design inspirée de la nature, que ce soit dans nos
            potagers, fermes, collectivités ... ou même sur les rebords de
            fenêtres.
          </p>

          <p class="geoff">Geoff Lawton.</p>
        </div>
      </div>
      
      
      <div id="formulaire" class="w-100 mb-5 col-xs-10 col-sm-9 p-3 my-0 mx-auto formulaire">
        
             
             
            <?php
             
             include "formulaire.php";
             if(isset($commentaire)){ echo '<div class="alert alert-danger mt-3 text-center">' . $commentaire . '</div>' ;} 
             if(isset($commentairebon)){ echo '<div class="alert alert-success mt-3 text-center">' . $commentairebon . '</div>' ;}
             
             ?>
             
      </div>
      
    </main>

   <footer>

      <ol >
        <li><a href="#">Acceuil</a></li>
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
    <script src="../javascript/main.js"></script>
  </body>
</html>
