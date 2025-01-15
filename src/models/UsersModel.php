<?php
require_once __DIR__ . "/../db/db.php";

class UsersModel
{
    private $pdo;
    private $bd;

    public function __construct()
    {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    }
    //RA2: Comprobar que existen los usuarios
    public function compUser($nombre, $rol)
    {
        $stmt = $this->pdo->prepare("SELECT id,nombre,rol FROM usuarios WHERE nombre = :nombre AND rol = :rol");
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":rol", $rol, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
