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
}
