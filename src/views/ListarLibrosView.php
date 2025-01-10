<?php

class ListarLibrosView
{
    //Mostrar los libros cargado en models
    public function mostrarLibros($libros)
    {
        foreach ($libros as $libro) {
            echo '<tr>';
            echo '<td>' . $libro['titulo'] . '</td>';
            echo '<td>' . $libro['autor']  . '</td>';
            echo '<td>' . $libro['ISBN']  . '</td>';
            echo '</tr>';
        }
    }
}
