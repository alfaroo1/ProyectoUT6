<?php

class AutenticateController
{
    private $model;

    public function __construct()
    {
        $this->model = new BibliotecaModels();
    }
    public function login($nombre, $rol)

    {
        $user = $this->model->compUser($nombre, $rol);
        //Si es correcto 
        if ($user) {
            //Iniciamos sesion
            session_start();
            $_SESSION['userId'] = $user['id'];
            $_SESSION['userNom'] = $user['nombre'];
            //Depende del tipo de user
            if ($rol == "usuario") {
                header("Location: ./pages/libros.php");
            } else if ($rol == "admin") {
                header("Location: ./pages/adminInsert.php");
            }
        }
    }
}
