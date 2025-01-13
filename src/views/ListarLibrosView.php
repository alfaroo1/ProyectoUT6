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
    //Mostrar libros para admin
    public function mostrarLibrosAdmin($libros)
    {
        if (count($libros) == 0) {
            echo '<tr><td colspan="3" class="text-center">No existe ningún usuario</td></tr>';
        } else {
            // Recorremos el array y generamos filas de la tabla
            foreach ($libros as $value) {
                echo '<tr>';
                // Creamos un formulario para cada fila
                echo '<form method="post" ">';
                // Campos de la fila
                foreach ($value as $clave => $valor) {
                    if ($clave == "ISBN") {
                        // ISBN como campo oculto
                        echo '<td class="text-black"><input type="text" value="' . htmlspecialchars($valor) . '" name="isbn" readonly></td>';
                    } elseif ($clave == "titulo") {
                        // Titulo como campo editable
                        echo '<td class="text-black"><input type="text" value="' . htmlspecialchars($valor) . '" name="titulo" ></td>';
                    } elseif ($clave == "autor") {
                        // Autor como campo editable
                        echo '<td class="text-black"><input type="text" value="' . htmlspecialchars($valor) . '" name="autor" ></td>';
                    }
                }
                // Botones de acción
                echo '<td>';
                echo '<input type="submit" value="Modificar" name="mod" class = "bg-blue-400 p-4 rounded-sm ml-4">';
                echo '<input type="submit" value="Borrar" name="borrar" class = "bg-red-500 p-4 rounded-sm ml-4">';
                echo '</td>';
                echo '</form>'; // Cerramos el formulario para esta fila
                echo '</tr>';
            }
        }
    }
}
