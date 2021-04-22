<?php



// Faire fonctionner ce code
class User
{
    protected $db;
    
    
    // Injection de la class DBConnector
    public function __construct(DBConnector $db)
    {
        $this->db = $db->db;
    }
    public function checkIfUserExist($username){
        $dbreturn = $this->db->prepare("SELECT * FROM user WHERE username = ?");
        $dbreturn->execute([
                    $username
                ]);
        $user= $dbreturn->fetch();
        return $user;
    }
    public function getUser($username)
    {
        
        $dbreturn = $this->db->prepare("SELECT * FROM user WHERE username = ? ");
              $dbreturn->execute([
                    $username
                    
                ]);
            // on stock le username et password de la database dans un tableau  
        $user = $dbreturn->fetchAll();
        return $user;
    }
    public function addUser($username, $password)
        {
         $usernameExist = $this->checkIfUserExist($username);
         if($username != $usernameExist[0]['username']){
             $req= $this->db->prepare("INSERT INTO user (username,password) VALUES( ?  , ? )");
            
            $req->execute([
                          $username,
                          $password,
                          
                      ]);
                      
            header('Location: login.php');             
                      
             
             
         }else{
             $error = "Ce compte existe dejà";
             return $error;
         }
         
    }
    public function deleteUser($username)
    {
        
        $req= $this->db->prepare('DELETE FROM user WHERE username = ?');
        $req->execute([
                        $username
        ]);
    }
    public function editUser($username, $password) // Cette methode va dans la class Video
    {
         
         $req = $this->db->prepare("UPDATE user SET password = ? WHERE username = ? ");
         
         $nameExist = $this->getUser($username);
        
         $req->execute([
                          
              $password,
              $username
              
         ]);
             
          
             
    }
}