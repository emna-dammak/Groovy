<?php
include_once("includes/autoload.php");
class ArtistRepository
{
    protected PDO $con;
    public function __construct()
    {
        $this->con=ConnexionBD::getInstance();
    }
    public function findById($id)
    {
        $artistQuery=$this->con->prepare('Select * from artists where id= ?');
        $artistQuery->execute(array($id));
        $artist=$artistQuery->fetch(PDO::FETCH_OBJ);
        return $artist;
    }

}