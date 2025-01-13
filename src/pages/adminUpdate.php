<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Biblioteca | Admin</title>
</head>

<body>
    <!-- Container -->
    <div>
        <!-- Navegador -->
        <div class="flex justify-between items-center p-8 bg-slate-900 text-white font-medium">
            <div class="flex gap-12 items-center">
                <!-- Logo Web -->
                <div class="flex items-center gap-2">
                    <p class="text-2xl"><i class="fa-solid fa-book"></i></p>
                    <h1 class="text-2xl">BookEase</h1>
                </div>
                <!-- Nav -->
                <nav>
                    <ul class="flex gap-4">
                        <li><a href="./adminInsert.php" class="text-xl">Insertar</a></li>
                        <li><a href="./adminUpdate.php" class="text-xl">Modificar Y Borrar</a></li>
                        <li><a href="./reserva.php" class="text-xl">Reservas</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Buttons users -->
            <div class="flex gap-6 items-center">
                <!-- Nom User -->
                <p class="mr-4 text-xl">Bienvenid@, <?php echo $_SESSION['userNom']; ?></p>
                <!-- Finish session -->
                <button class="w-[150px] p-2 rounded-md bg-violet-600 text-lg">
                    <a href="../controllers/LogoutController.php">Cerrar Sesion</a>
                </button>
            </div>
        </div>
        <!-- Cuerpo -->
        <main class="p-4 flex flex-col items-center w-full">
            <!-- Tabla para borrar o modifcar lirbos -->
            <div class="bg-slate-400 text-white text-center w-1/2 rounded-sm p-4 mt-12">
                <h2 class="font-medium text-2xl mb-10">Estos son todos los libros actuales</h2>
                <div class="text-ceneter w-full">
                    <table>
                        <tr>
                            <th>ISBN</th>
                            <th>Titulo</th>
                            <th>Autor</th>
                        </tr>
                        <?php
                        include "../controllers/LibrosController.php";
                        include "../models/LibrosModels.php";
                        include "../views/ListarLibrosView.php";
                        //Mostramos los datos
                        $controller = new LibrosController();
                        $controller->listarAdmin();
                        //Controlamos lo qu haga el usuario
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $isbn = $_POST['isbn'];
                            echo $isbn;
                            //Si pulsa el boton modificar
                            if (isset($_POST['mod'])) {
                                //Sacamos los datos del form
                                $titulo = $_POST['titulo'];
                                $autor  = $_POST['autor'];
                                //Lllamos a la funcion de modificacion
                                $controller->modificarLibros($isbn, $titulo, $autor);
                            } //Si pulsa el boton de borrar
                            else if ($_POST['borrar']) {
                                $controller->eliminarLibros($isbn);
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>

        </main>
        <!-- Footer -->
        <footer>

        </footer>
    </div>
</body>

</html>