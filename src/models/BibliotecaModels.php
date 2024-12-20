<?php
require_once __DIR__ . "/../db/db.php";

class BibliotecaModels
{
    private $pdo;
    private $bd;

    public function __construct()
    {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    }
    //RA3: Listar todos los libros que contiene la BD
    public function getLibros()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM libros");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
