<?php


class Posts
{
    protected $db;
    
    
    // Injection de la class DBConnector
    public function __construct(DBConnector $db)
    {
        $this->db = $db->db;
    }
    
    public function getPosts() // Cette methode va dans la class Post
    {
        $req = $this->db->query('SELECT * FROM videos ORDER BY numero');
        $videos = $req->fetchAll();
        return $videos;
    }
    
    public function getPost($id) // Cette methode va dans la class Post
    {
        $idClean = strip_tags($id);
        $req = $this->db->prepare('SELECT * FROM videos WHERE numero = ? ');
        $req->execute([
                      $idClean
          ]);
        $video = $req->fetch();
        return $video;
    }
    
}