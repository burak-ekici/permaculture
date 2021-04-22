<?php






// C'est bien parti.
// Maintenant, toutes les methodes qui concernent les video iront dans une class Video, et toutes les methodes qui concernent les posts iront dans un model Post,
// Chaque resource doivent avoir sa propre classe, $user: class User, $post: class Post etc etc etc...




    class DBConnector {
       
        // private $db; // Si la db est prive, on ne pourra pas s'en servir depuis les autres classes.
        public $db;
        
        
        // Ne pas oublier les motes cles public ou protected ou private.
        public function __construct()
        {
            try{
                $this->db = new PDO('mysql:host=db.3wa.io;dbname=roxxstar69_;charset=UTF8',
                      'roxxstar69', '22a0f3a6b871d628718db226ea7e9d93',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
            
            } catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }
         }
         
    };
    


    
    