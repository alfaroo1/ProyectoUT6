<?php

class ReservasController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ReservasModels();
        $this->view = new ReservasView();
    }
    //Sacamo el id del libro
    public function getIdLibro($libro)
    {
        $id = $this->model->getIdLibro($libro);
        //Si existe el libro devolvemos el id
        if ($id) {
            return $id;
        }
    }
    //Insertamos los datos
    public function reserva($id_libro, $id_user, $fech_ini, $fech_fin)
    {
        $reserva = $this->model->reserva($id_libro, $id_user, $fech_ini, $fech_fin);
    }
}
