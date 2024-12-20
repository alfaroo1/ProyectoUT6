<?php

class ListarLibrosView
{
    //Mostrar los libros cargado en models
    public function mostrarLibros($libros)
    {
        echo '<table>';
        echo '<tr><th>Título</th><th>Completada</th></tr>';
        foreach ($libros as $libro) {
            echo '<tr>';
            echo '<td>' . $libro['titulo'] . '</td>';
            echo '<td>' . $libro['autor']  . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
