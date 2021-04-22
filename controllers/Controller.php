<?php

include(dirname(__DIR__) . '/models/DBConnector.php');
include(dirname(__DIR__) . '/models/Posts.php');
include(dirname(__DIR__) . '/models/Videos.php');
include(dirname(__DIR__) . '/models/Users.php');

class Controller
{
    protected $dbconnector;
    protected $posts;
    protected $user;
    protected $videos;
    
    public function __construct(){
        
         $this->dbconnector = new DBConnector();
         $this->posts = new Posts($this->dbconnector);
         $this->user = new User($this->dbconnector);
         $this->videos = new Videos($this->dbconnector);
         
    }
   
}