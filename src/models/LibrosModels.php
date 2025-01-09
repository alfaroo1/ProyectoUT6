<?php

require_once "../db/db.php";

class LibrosModels
{
    private $bd;
    private $pdo;

    public function __construct()
    {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    }

    //RA5
    public function agregarLibros($titulo, $autor)
    {
        $stmt = $this->pdo->prepare("INSERT INTO libros VALUES(:titulo,:autor)");
        $stmt->bindParam(":titulo", $titulo, PDO::PARAM_STR);
        $stmt->bindParam(":autor", $autor, PDO::PARAM_STR);
        $stmt->execute();
    }
    //RA6
    
    //RA7

}
