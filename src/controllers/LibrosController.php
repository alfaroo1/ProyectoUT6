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
        if ($this->model->controlInsercionLibros($ISBN)) {
            echo '<p class="text-red-500 text-center font-medium text-xl mt-4">El libro ' . $ISBN . ' ya existe</p>';
        } else {
            $this->model->agregarLibros($ISBN, $titulo, $autor);
            echo '<p class="text-green-500 text-center font-medium text-xl mt-4">El libro ' . $titulo . ' se ha insertado correctamente</p>';
        }
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
