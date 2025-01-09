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
    <title>Biblioteca | Libros</title>
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
                        <li><a href="../index.php" class="text-xl">Inicio</a></li>
                        <li><a href="./libros.php" class="text-xl">Libros</a></li>
                        <li><a href="./reserva.php" class="text-xl">Reservas</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Buttons users -->
            <div class="flex gap-6 items-center">
                <!-- Nom User -->
                <p class="mr-4 text-xl">Bienvenido, <?php echo $_SESSION['userNom']; ?></p>
                <!-- Finish session -->
                <button class="w-[150px] p-2 rounded-md bg-violet-600 text-lg"><a href="#">Cerrar Sesion</a></button>
            </div>
        </div>
        <!-- Cuerpo -->
        <main class="p-4 flex flex-col items-center w-full">
            <div class="bg-slate-400 text-white text-center w-1/2 rounded-sm p-4">
                <h2 class="font-medium text-2xl mb-10">Estos son todos los libros actuales</h2>
                <?php
                include "../views/ListarLibrosView.php";
                include "../controllers/LibrosController.php";
                include "../models/BibliotecaModels.php";

                $librosController = new LibrosController();

                $librosController->listar();
                ?>
            </div>
        </main>
        <!-- Footer -->
        <footer>

        </footer>
    </div>
</body>

</html>