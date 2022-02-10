<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   
    <title>Formulario</title>
</head>
<body>
    <?php
       include("conexion.php")
    ?>

    <a href="./index.php">Link a index</a>
    <hr>
    <h1 class="centrarcontenido">Formulario</h1>
    <form action= "store.php" method="POST"> 
        <div>
            <label for="name">Nombre: </label>
            <input type="text" id="name" name="nombre" autofocus required placeholder="Ingrese su nombre">
            <label for="email">Correo: </label>
            <input type="email" id="email" name="correo" required placeholder="Ingrese su email">
        </div>
        <div>
            <p>Género: </p>
            <input type="radio" id="femenino" name="genero" value="female">
            <label for="femenino">Femenino</label>
            <input type="radio" id="masculino" name="genero" value="male">
            <label for="masculino">Masculino</label>
        </div>
        <br>
        <div>
            <select name="ciudad">
                <option value="zapopan">Zapopan</option>
                <option value="guadalajara" selected>Guadalajara</option>
                <option value="tonala">Tonala</option>
              </select>
        </div>
        <br>
        <div class="centrarcontenido">
            <button>Enviar</button>
        </div>

    </form>
    
</body>
</html>