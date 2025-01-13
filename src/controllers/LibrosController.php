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
    public function listarAdmin()
    {
        $libros = $this->model->getLibros();
        $this->view->mostrarLibrosAdmin($libros);
    }
    public function agregarLibros($ISBN, $titulo, $autor)
    {
        $libro = $this->model->agregarLibros($ISBN, $titulo, $autor);
        // $this->view->insertarLibros();
    }
    //Funcion que llamada al modelo para modifcar libros
    public function modificarLibros($ISBN, $titulo, $autor)
    {
        $mod = $this->model->modificarLibros($ISBN, $titulo, $autor);
    }
    //Function que llama al modelo para eliminar lirbos
    public function eliminarLibros($ISBN)
    {
        $del = $this->model->eliminarLibros($ISBN);
    }
}
