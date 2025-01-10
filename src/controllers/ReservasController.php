<?php

class ReservasController
{
    private $model;

    public function __construct()
    {
        $this->model = new ReservasModels();
    }
    //Insertamos los datos
    public function reserva($id_libro, $id_user)
    {
        $reserva = $this->model->reserva($id_libro, $id_user);
    }
}
