<?php
session_start();
//Declaramos la variable de mensaje de error
$error = null;
//Controlamos que el usuario envie el formulario
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Sacamos los datos
    $libro = $_POST['nom_lib'];
    $fecha_inicio = $_POST['fech_ini'];
    $fecha_fin = $_POST['fecha_fin'];
    //
    include "../controllers/ReservasController.php";
    include "../models/ReservasModels.php";
    $controller = new ReservasController();
    //Sacamos el id del libro
    $id = $controller->getIdLibro($libro);
    //Realizamos la inserccion
    $controller->reserva($id, $_SESSION['userId'], $fecha_inicio, $fecha_fin);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Biblioteca | Reservas</title>
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
                        <li><a href="#" class="text-xl">Reservas</a></li>
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
            <!-- Formulario Reserva -->
            <div class="bg-slate-900 mt-12 w-[500px] h-[500px] rounded-sm p-4 text-white">
                <h2 class="text-center text-2xl">Reserva un libro</h2>
                <form action="" method="post" class="mt-6">
                    <!-- Nombre libro -->
                    <div class="text-center flex flex-col items-center gap-4 mt-6">
                        <label for="">Nombre Libro</label>
                        <input type="text" name="nom_lib" class="w-[250px] text-black">
                    </div>
                    <!-- Fecha inicio reserva -->
                    <div class="text-center flex flex-col items-center gap-4 mt-6">
                        <label for="">Fecha inicio</label>
                        <input type="date" name="fech_ini" class="w-[250px] text-black">
                    </div>
                    <!-- Fecha fin reserva -->
                    <div class="text-center flex flex-col items-center gap-4 mt-6">
                        <label for="">Fecha limite</label>
                        <input type="date" name="fech_lim" class="w-[250px] text-black">
                    </div>
                    <!-- Mensaje de error -->
                    <?php
                    if ($error != null) {
                        echo $error;
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