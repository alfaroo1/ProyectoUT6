<?php
//Inlcuimos los datos de la BD para conectarnos
require_once __DIR__ . "/../config/BibliotecaConfing.php";
class DB
{
    private $pdo;
    //FUNCION CONEXION
    public function __construct()
    {
        //Declaramos las variables del archivo config.php
        global $host, $dbname, $user, $pass;
        try {
            //Instancia PDO para conectarnos a la BD
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //FUNCION INSTANCIA CONEXION
    public function getPDO()
    {
        return $this->pdo;
    }
}
