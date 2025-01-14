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
        // Recorremos el array y generamos filas de la tabla
        foreach ($libros as $value) {
            echo '<tr>';
            // Creamos un formulario para cada fila
            echo '<form method="post">';
            // Campos de la fila
            foreach ($value as $clave => $valor) {
                if ($clave == "ISBN") {
                    // ISBN como campo oculto
                    echo '<td class="text-black pr-2"><input type="text" class="p-1 rounded-md" value="' . htmlspecialchars($valor) . '" name="isbn" readonly></td>';
                } elseif ($clave == "titulo") {
                    // Titulo como campo editable
                    echo '<td class="text-black pr-2"><input type="text" class="p-1 rounded-md" value="' . htmlspecialchars($valor) . '" name="titulo" ></td>';
                } elseif ($clave == "autor") {
                    // Autor como campo editable
                    echo '<td class="text-black pr-2"><input type="text" class="p-1 rounded-md" value="' . htmlspecialchars($valor) . '" name="autor" ></td>';
                }
            }
            // Botones de acción
            echo '<td>';
            echo '<input type="submit" value="Modificar" name="mod" class = "bg-blue-400 pt-2 pb-2 rounded-md w-[150px] ml-4">';
            echo '<input type="submit" value="Borrar" name="borrar" class = "bg-red-500 pt-2 pb-2 rounded-md w-[150px] ml-4">';
            echo '</td>';
            echo '</form>'; // Cerramos el formulario para esta fila
            echo '</tr>';
        }
    }
}
