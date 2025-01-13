<?php


class LibrosController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new LibrosModels();
        $this->view = new ListarLibrosView();
    }

    public function listar()
    {
        $libros = $this->model->getLibros();
        $this->view->mostrarLibros($libros);
    }
    public function agregarLibros($ISBN, $titulo, $autor)
    {
        $libro = $this->model->agregarLibros($ISBN, $titulo, $autor);
        // $this->view->insertarLibros();
    }
}
