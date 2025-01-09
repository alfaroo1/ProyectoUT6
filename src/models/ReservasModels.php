<?php

require_once "../db/db.php";

class ReservasModels
{
    private $bd;
    private $pdo;

    public function __construct()
    {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    }
    //RA4
    public function getIdLibro($libro)
    {
        $stmt = $this->pdo->prepare("SELECT id FROM libros WHERE titulo = :titulo");
        $stmt->bindParam(":titulo", $libro, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function reserva($id_libro, $id_user, $fech_ini, $fech_fin)
    {
        $stmt = $this->pdo->prepare("INSERT INTO prestamos VALUES (:id_lib,:id_user,:fech_ini,:fech_fin)");
        $stmt->bindParam(":id_lib", $id_libro, PDO::PARAM_INT);
        $stmt->bindParam(":id_user", $id_user, PDO::PARAM_INT);
        $stmt->bindParam(":fech_ini", $fech_ini, PDO::PARAM_STR);
        $stmt->bindParam(":fech_fin", $fech_fin, PDO::PARAM_STR);
        $stmt->execute();
    }
}
