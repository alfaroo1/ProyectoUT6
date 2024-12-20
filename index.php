<?php

include "./views/ListarLibrosView.php";
include "./controllers/LibrosController.php";
include "./models/BibliotecaModels.php";

$librosController = new LibrosController();

$librosController->listar();
