<?php

include('Controller.php');

/**
 * Ici on ne s'occupe que des utilisateurs.
 */
class UserController extends Controller
{   
    
    public function checkAdmin(){
        
        if(isset($_SESSION["admin"]) AND $_SESSION["admin"] ==="ok"){
        header('Location: videoAdmin.php');
        }
        if(isset($_SESSION["user"]) AND $_SESSION["user"] ==="ok"){
        header('Location: video.php');
        }
        if(isset($_POST) AND !empty($_POST)){
        // et que les inputs username et password on été remplie, on empeche l'injection de code dans les inputs
            $username = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);
            if (!empty($username) AND !empty($password)){
              // on recupere les log de l'admin
                $user = $this->user->getUser($username,$password);
            // si les elements des inputs et de la databses correspondent alors on donne l'acces a videoAdmin.php, la page qui permet d'ajouter du contenue
            
                if (!empty($user)){
                    if($user[0]["username"] == ($username) AND $user[0]["password"] == ($password) AND $user[0]['admin'] == '1'){
                      $_SESSION["admin"] = "ok";
                      $_SESSION["id_user"] = $user[0]["id"];
                      
                      header("location:videoAdmin.php");
                    }else if ($user[0]["username"] == ($username) AND $user[0]["password"] == ($password) AND $user[0]['admin'] == '0'){
                      $_SESSION["user"] = 'ok';
                      $_SESSION["username"] = $username;
                      header("location:video.php");
                    }
                }else{
                        return $error = "Identifiants incorrect";
                }
            }else{
                 return $error = "Veuillez remplir tous les champs !";
            }
            
       
        }
    }
    
    
    
    public function create()
    {
        if(isset($_POST["pseudo"]) AND isset($_POST["motdepasse"]) AND isset($_POST["motdepasse2"])){
            $username = htmlspecialchars($_POST["pseudo"]);
            $password = htmlspecialchars($_POST["motdepasse"]);
            $password2 = htmlspecialchars($_POST["motdepasse2"]);
            if(!empty($username) AND !empty($password) AND !empty($password2) AND $password == $password2){
                return $this->user->addUser($username, $password);
            }else if( empty($username) OR empty($password) OR empty($password2)){
                $error="Veuillez remplir tous les champs";
                return $error;
            }else if($password != $password2){
                $error = 'les mots de passe ne correspondent pas';
                return $error;
            }
        }
        
    }
    
    
    
    public function edit($username)
    {
        if(isset($_POST['oldPassword']) && isset($_POST['newPassword']) && isset($_POST['checkPassword'])){
            if($_POST['oldPassword'] === $_POST['newPassword']){
                return "Votre ancien mot de passe est identique au nouveau, veuillez entrer un nouveau mot de passe !";
            }else if($_POST['newPassword'] !== $_POST['checkPassword']){
                return "Vous avez entrer un mauvais mot de passe de verification, veuillez entrer les même mot de passe";
            }else if(!empty($_POST['oldPassword']) && !empty($_POST['newPassword']) && !empty($_POST['checkPassword'])){
                $this->user->editUser($username, $_POST['newPassword']);
                return 'Vous avez bien modifier votre mot de passe';
            }
        }
        
    }
    
    public function destroy($username)
    {
        if(isset($_POST['password'])){
            $mdp = $_POST['password'];
            $user = $this->user->getUser($username);
            
            if(!empty($mdp) && ($mdp === $user[0]['password'])){
                $this->user->deleteUser($username);
                header("location:login.php");
            }
            
        }
        
    }
}

?>
        
    
