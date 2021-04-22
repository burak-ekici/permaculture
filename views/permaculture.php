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
    <link rel="stylesheet" href="../css/permaculture.css" />
  </head>
  <body>
    <!--//////////////////////////////////// HEADER ////////////////////////////////////-->
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

    <!--//////////////////////////// MAIN //////////////////////////////////////-->

    <main>
      <div id="header"></div>
        <div class="contenue">
          <h3>La PERMACULTURE</h3>
          <section class="section1">
            
              <div class="para1">
                
                <img width="600px" src="../img/fraise.jpg" alt="banc-sous-arbre">

                <div class="p1">
                  <p>Créée dans les années soixante-dix en Australie par Bill Molisson et David Holmgren, la permaculture est un système conceptuel inspiré du fonctionnement de la nature. Depuis des centaines de millions d’années, la nature crée des écosystèmes harmonieux et durables, qui génèrent eux-mêmes les conditions favorables au développement de formes de vie plus évoluées. Permaculture signifiait, à l’origine, agriculture permanente, puis le concept s’est élargi pour devenir culture permanente, dans le sens de durable.
                  </p>
                  <p>
                    L’être humain, particulièrement en occident durant les derniers siècles, artificialise les écosystèmes et s’impose de ce fait l’obligation de devoir compenser par son travail et par des intrants les fonctions remplies naturellement par le vivant (par exemple, pour un jardin, la capacité des plantes et des micro-organismes contenus dans un sol vivant à créer de l’humus, en dégradant la roche-mère, à utiliser l’énergie du soleil, l’azote et le carbone atmosphérique, l’eau de pluie…).
                  </p>
                  <p>
                    Elle cherche à concevoir des installations humaines harmonieuses, durables, résilientes, économes en travail comme en énergie, à l’instar des écosystèmes naturels. Ses concepts de design reposent sur un principe essentiel : positionner au mieux chaque élément de manière à ce qu’il puisse interagir positivement avec les autres. Créer des interactions bénéfiques, comme dans la nature où tout est relié. Dès lors, chaque fonction est remplie par plusieurs éléments et chaque élément remplit plusieurs fonctions, les déchets de l’un deviennent les produits de l’autre, permettant au tout d’être davantage que la somme des parties. C’est une vision holistique, organique du monde.
                  </p>
                </div>
                <div class="clear"></div>
              </div>


              <div class="para2">
                  <img src="../img/poule.jpg" alt="poule">
                  
                  <div class="p2">
                    <p>La permaculture a un objet large : elle intègre l’agro-écologie, la construction écologique, les énergies renouvelables… dans une vision pragmatique et souple, pouvant être adaptée à chaque territoire, aux besoins et aspirations de chaque personne ou communauté. Elle offre un cadre conceptuel évolutif doté d’une capacité fascinante d’intégration de « bonnes pratiques » issues de différentes traditions, comme des dernières avancées des sciences contemporaines. Ses concepts peuvent s’appliquer, à priori, à toutes les installations humaines : villes (avec le mouvement des Villes en Transition), entreprises, communautés (les éco-villages), fermes et jardins…
                    </p>
                    <p>Elle est bien adaptée à de petites surfaces, propose des solutions low tech, mais reposant sur une observation attentive du milieu et une connaissance poussée du fonctionnement du vivant. Elle favorise l’émergence d’une société solidaire et décentralisée.
                    </p>
                    <p>
                      Directement en lien avec ses fondements écologiques, elle vous permettra de vivre de manière plus indépendante face aux industries. Dans le cadre d’un potager, l’avantage d’avoir sa propre production bio n’impactera pas seulement votre santé mais également votre porte-monnaie.
                    </p>
                  </div>
                
                <div class="clear"></div>
              </div>

              <div class="para3">
                <img  src="../img/platbio.jpg" alt="plat-bio">

                <div class="p3">
                  <p>
                    En effet, si construire son jardin peut dans un premier temps représenter un certain budget (aménagement, achat d’outils, de graines, de matières…) ; sur la durée, la permaculture vous serra en revanche très profitable ! En cultivant vous-même les produits que vous consommez, que ce soit des fruits, des légumes, des arômes ou des épices, vous limiterez vos allés et venus au supermarché ! Vous limiterez également  vos achats de graines si vous réutilisez celles de vos propres végétaux. 
                  </p>
                  <p>
                    Certaines personnes vont même encore plus loin en créant des fermes biologiques dans leur jardin, par exemple en y intégrant un poulailler. Ce type d’élevage peut être très intéressant pour le développement de votre permaculture puisqu’il permet la production de déchets naturels sur le sol et la régulation des insectes. On peut donc parler de système qui s’autonomise tout seul.
                  </p>
                  <p>
                    En somme, grâce à cette première forme d’autonomie, votre consommation végétale n’est plus liée de façon stricte à vos économies et au stock de votre magasin le plus proche mais à la façon dont vous organisez la culture dans votre jardin.
                  </p>
                  <div class="clear"></div>
              </div>

              <div class="presentation">
                <img src="../img/geoff.jpg" alt="geoff_lawton">
      
              <div class="p4">
                <p>
                  Geoff Lawton, né le 10 décembre 1954 à Stoke-on-Trent, dans le Staffordshire, au Royaume-Uni, est un concepteur, enseignant, consultant et conférencier de permaculture australien. Depuis 1995 il s'est spécialisé dans l'éducation, l'implémentation, l’établissement de système, l'administration et le développement communautaire de la permaculture.
                </p>
                <p>
                  Il a réalisé, dans les années 1990, une refertilisation d'une partie du désert salin, de Jordanie, situé sous le niveau de la mer Morte, via la permaculture. Ses travaux ont ensuite été continué, sous la supervision de la Princesse Basma bint Talal (en) de Jordanie.
      
                  Il est proche de John D. Liu un réalisateur et chercheur sino-américain, qui a réalisé un documentaire sur la refertilisation d'une partie du plateau de Lœss de la taille de la Belgique, en Chine, suite aux efforts des agriculteurs, chercheurs et gouvernement locaux. Geoff Lawton apparaît dans le documentaire de John D. Liu, « Hope in a Changing Climate ».
                </p>
                <p class="bold">
                  " Ce site va vous familiariser avec ce personnage pionnier de la permaculture, nous traduirons ses vidéos et partagerons son savoir-faire. Ses prouesses en matière de production dans les zones les plus difficiles de notre planète comme dans le desert de jordanie à 40 mètres sous le niveau de la mer Morte et sa terre morte, sèche et haute en teneur de sel sont la preuve même que la permaculture peut résoudre beaucoup de nos soucis si ce n'est toutes."
                </p>
              </div>
              <div class="clear"></div>
            </div>

            

            </div>

          
          </section> 

        </div>  
    </main>

    <!--///////////////////////////// FOOTER ////////////////////////////////////////-->

    <footer>

      <ol >
        <li><a href="index.php">Acceuil</a></li>
        <li><a href="permaculture.html">Permaculture</a></li>
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
    <script src="../javascript/permaculture.js"></script>
  </body>
</html>
