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
                        <li><a href="./adminReserva.php" class="text-xl">Reservas</a></li>
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
            <!-- Formulario insertar lirbos -->
            <div class="bg-slate-900 mt-12 w-[500px] h-[450px] rounded-sm p-4 text-white"">
                <h2 class=" text-center text-2xl font-medium">Inserta un nuevo libro</h2>
                <!-- Formulario -->
                <form action="" method="post">
                    <!-- Numero ISBN -->
                    <div class="text-center flex flex-col items-center gap-4 mt-6">
                        <label for="">ISBN</label>
                        <input type="text" name="isbn" class="text-black">
                    </div>
                    <!-- Nombre Libro -->
                    <div class="text-center flex flex-col items-center gap-4 mt-6">
                        <label for="">Titulo</label>
                        <input type="text" name="title" class="text-black">
                    </div>
                    <!-- Nombre Autor -->
                    <div class="text-center flex flex-col items-center gap-4 mt-6">
                        <label for="">Autor</label>
                        <input type="text" name="autor" class="text-black">
                    </div>
                    <!-- Mostramos mensaje -->
                    <?php
                    //Controlmaos que el usuario envie el formulario
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        //Sacamos los datos
                        $isbn = $_POST['isbn'];
                        $titulo = $_POST['title'];
                        $autor = $_POST['autor'];
                        //LLamamos al controlador
                        include "../controllers/LibrosController.php";
                        include "../models/LibrosModels.php";
                        include "../views/ListarLibrosView.php";
                        $controller = new LibrosController();
                        $controller->agregarLibros($isbn, $titulo, $autor);
                    }
                    ?>
                    <!-- Btn enviar -->
                    <button type="submit" class="w-[100px] p-2 mt-8 ml-7 rounded-md bg-violet-600 text-center">Enviar</button>
                </form>
            </div>
        </main>
        <!-- Footer -->
        <footer>

        </footer>
    </div>
</body>

</html>