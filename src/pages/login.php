<?php
//Iniciamos sesion
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Biblioteca | Log In</title>
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
            <div>
                <!-- Login -->
                <button class="border border-white w-[100px] p-2 rounded-md mr-4"><a href="./login.php">Log in</a></button>
                <!-- Register -->
                <button class="w-[100px] p-2 rounded-md bg-violet-600"><a href="./register.php">Register</a></button>
            </div>
        </div>
        <!-- Cuerpo -->
        <main class="text-white mt-12 flex justify-center">
            <div class="bg-slate-900 mt-12 w-[500px] h-[350px] rounded-sm p-4">
                <h2 class="text-center text-2xl">Inicia sesion</h2>
                <form action="" class="mt-6">
                    <!-- Nombre -->
                    <div class="text-center flex flex-col items-center gap-4 mt-6">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="w-[250px]">
                    </div>
                    <!-- Rol -->
                    <div class="text-center flex flex-col items-center gap-4 mt-6">
                        <label for="">Tipo de rol</label>
                        <input type="text" name="rol" class="w-[250px]">
                    </div>
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