<?php
include('Controller.php');

/**
 * Ici on ne s'occupe que des videos.
 */
class VideoController extends Controller
{
   
    /**
     * Toutes les videos
     */ 
    public function index()
    {
        $annonce = null;
        if(isset($_SESSION["admin"]) AND $_SESSION["admin"] ==="ok"){
          // on verifie que les input ont été remplie
           if(isset($_POST["titre"]) AND isset($_POST["numero"]) AND isset($_POST["link"]) AND !empty($_POST["titre"]) AND !empty($_POST["numero"]) AND !empty($_POST["link"])){
                $titre = htmlspecialchars($_POST["titre"]) ;
                $numero = htmlspecialchars($_POST["numero"]) ;
                $link = htmlspecialchars($_POST["link"]) ;
            // on empeche l'injection de code par les inputs
            if(!empty($titre) AND !empty($numero) AND !empty($link)){
            
                  // on ajoutes les elements des inputs dans notre database en securisant les values
                  $newVideos = array(
                      'titre' => $titre,
                      'link' => $link,
                      'numero' => $numero,
                      'id_user' => $_SESSION["id_user"]
                      );
                      
                  $this->create($newVideos);
                  $annonce = "La Video à bien été enregistré";  
             }
          // on indique que tous les champs ne sont pas remplie 
          }else if (empty($_POST["titre"]) AND empty($_POST["numero"]) AND empty($_POST["link"]))
            {
            $annonce =  "Veuillez remplir tous les champs";
            }
        }  
        // on redirige sur la page de connection pour eviter que quelqu'un essai d'entrer sur cette page sans se connecter
        else if (!empty($_SESSION["admin"]) OR $_SESSION["admin"] != "ok"){
          header('Location: login.php');
        };
        
        return array('videos' => $this->getAllPosts(), 'annonce' => $annonce);
    }
    
    
    
    /**
     * Une video par son id
     */ 
    public function getById($id)
    {
        
        return $this->posts->getPost($id);
    }
    
    public function getAllPosts(){
        
  
          if ( isset($_SESSION["user"]) || isset($_SESSION['admin'] )){
            
          }else{
            
            header("location:login.php");
          }
                
        
        return $this->posts->getPosts();
    }
    
    /**
     * On cree une video
     */ 
    public function create(array $data)
    {
        return $this->videos->addVideo($data['titre'],$data["link"],$data["numero"],$data["id_user"]);
    }
    
    /**
     * On edite une video
     */ 
    public function edit()
    {
        if(isset($_SESSION["admin"]) AND $_SESSION["admin"] ==="ok"){
            // on verifie que les input ont été remplie
           if(isset($_POST["titre"]) AND isset($_POST["numero"]) AND isset($_POST["link"]) AND !empty($_POST["titre"]) AND !empty($_POST["numero"]) AND !empty($_POST["link"])){
                $titre = htmlspecialchars($_POST["titre"]) ;
                $numero = htmlspecialchars($_POST["numero"]) ;
                $link = htmlspecialchars($_POST["link"]) ;
            // et on evite les injections de code dans les inputs
             
                  // on selectionne la video du numero de l'input puis on change ses valeurs par les nouvelles definie
                  
                  $param = array(
                      'titre' => $titre,
                      'link' => $link,
                      'numero' => $numero,
                      'id' => $_GET['id']
                      );
                  
                   $this->videos->editVideo($param['titre'],$param["link"],$param["numero"],$param["id"]);
                  
                  header('Location:modifier.php');
                  
                 
             
            
          }else if (empty($_POST["titre"]) AND empty($_POST["numero"]) AND empty($_POST["description"]) AND empty($_POST["link"])){
            $annonce = "Veuillez remplir tous les champs";
          }
      }// on redirige sur la page de connection pour eviter que quelqu'un essai d'entrer sur cette page sans se connecter
      else if (!empty($_SESSION["admin"]) OR $_SESSION["admin"] != "ok"){
          header('Location: login.php');
      };
      
    }
    /**
     * On efface une video
     */ 
    public function destroy($id)
    {
        return $this->videos->deleteVideo($id);
    }
}
