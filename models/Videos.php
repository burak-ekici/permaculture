<?php 

    class Videos
{
    protected $db;
    protected $PDO;
    
    // Injection de la class DBConnector
    public function __construct(DBConnector $db)
    {
        $this->db = $db->db;
        $this->PDO = $db;
    }
    
    public function addVideo($titre,$link,$numero,$id_user) // Cette methode va dans la class Video
        {
         $req= $this->db->prepare("INSERT INTO videos (titre , lien , numero, id_user) VALUES( ?  , ? , ?, ?)");
         $numExist = new Posts($this->PDO);
         
         
         if(!$numExist->getPost($numero)){ 
             
                  $req->execute([
                              $titre,
                              $link,
                              $numero,
                              $id_user
                  ]);
                  
         }
    }
    public function deleteVideo($id) // Cette methode va dans la class Video
    {
        $idClean = strip_tags($id);
        $req= $this->db->prepare('DELETE FROM videos WHERE numero = ?');
        
        if(isset($_SESSION["admin"]) AND $_SESSION["admin"] ==="ok"){
            $req->execute([
                        $idClean
            ]);
            header('Location: videoAdmin.php');
        }else{
            header('Location: videoAdmin.php');
        }
        
    }
    
    public function editVideo($titre,$link,$numero,$id) // Cette methode va dans la class Video
    {    
            
             $idClean = strip_tags($id);
             $req= $this->db->prepare("UPDATE videos SET titre = ? , lien = ? , numero = ? WHERE numero = ? ");
             $data = new Posts($this->PDO);
             $numExist = $data->getPost($numero);
             
                                 $req->execute([
                                          $titre,
                                          $link,
                                          $numero,
                                          $idClean
                                ]);
                                
             
           
         
    }
}