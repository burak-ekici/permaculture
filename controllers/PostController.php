<?php


/**
 * Ici on ne s'occupe que des posts. Faire la meme chose que VideoController.
 */

class PostsController extends Controller
{
    
    public function create(array $data)
    {
        return $this->videos->addVideo($data['titre'],$data["link"],$data["numero"],$data["id_user"]);
    }
    
    public function edit(array $data)
    {
        return $this->videos->editVideo($data['titre'],$data["link"],$data["numero"],$data["id"]);
    }
    
    public function delete($id)
    {
        return $this->videos->dalateVideo($id);
    }
}
