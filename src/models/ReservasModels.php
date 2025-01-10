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
    public function reserva($id_libro, $id_user)
    {
        $stmt = $this->pdo->prepare("INSERT INTO prestamos (ISBN,fecha_desde,fecha_hasta,id_user) VALUES (:id_lib,:fech_ini,:fech_fin,:id_user)");
        $stmt->bindParam(":id_lib", $id_libro, PDO::PARAM_INT);
        $stmt->bindParam(":id_user", $id_user, PDO::PARAM_INT);
        //Fecha actual
        $fechaActual = new DateTime();
        $fechaActualString = $fechaActual->format('Y-m-d');
        $stmt->bindParam(":fech_ini", $fechaActualString, PDO::PARAM_STR);
        //Fecha actual mas 30 dias
        $fechaFin = new DateTime();
        $fechaFin->modify('+30 days');
        $fechaFinString = $fechaFin->format('Y-m-d');
        $stmt->bindParam(":fech_fin", $fechaActualString, PDO::PARAM_STR);
        $stmt->execute();
    }
}
