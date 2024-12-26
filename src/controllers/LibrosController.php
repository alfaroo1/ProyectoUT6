<?php


class LibrosController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new BibliotecaModels();
        $this->view = new ListarLibrosView();
    }

    public function listar()
    {
        $tareas = $this->model->getLibros();
        $this->view->mostrarLibros($tareas);
    }
    public function comprobUser($nombre,$rol){
        $usuario = $this->model->compUser($nombre,$rol);
        //Depende de si exitse
        
    }
}
