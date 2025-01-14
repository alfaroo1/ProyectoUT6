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
    public function getLibros()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM libros");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //RA5
    public function agregarLibros($ISBN, $titulo, $autor)
    {
        $stmt = $this->pdo->prepare("INSERT INTO libros (ISBN,titulo,autor) VALUES (:ISBN,:titulo,:autor)");
        $stmt->bindParam(":ISBN", $ISBN, PDO::PARAM_STR);
        $stmt->bindParam(":titulo", $titulo, PDO::PARAM_STR);
        $stmt->bindParam(":autor", $autor, PDO::PARAM_STR);
        $stmt->execute();
    }
    //Controlar que no introduzca un libro ya insertado en la tabla
    public function controlInsercionLibros($ISBN)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM libros  
        WHERE ISBN = :ISBN");
        $stmt->bindParam(":ISBN", $ISBN, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
    }
    //RA6
    public function modificarLibros($ISBN, $titulo, $autor)
    {
        $stmt = $this->pdo->prepare("UPDATE libros 
        SET titulo = :titulo , autor = :autor
        WHERE ISBN = :ISBN");
        $stmt->bindParam(":ISBN", $ISBN, PDO::PARAM_STR);
        $stmt->bindParam(":titulo", $titulo, PDO::PARAM_STR);
        $stmt->bindParam(":autor", $autor, PDO::PARAM_STR);
        $stmt->execute();
    }
    //RA7
    public function eliminarLibros($ISBN)
    {
        $stmt = $this->pdo->prepare("DELETE FROM libros WHERE ISBN = :ISBN");
        $stmt->bindParam(":ISBN", $ISBN, PDO::PARAM_STR);
        $stmt->execute();
    }
}
