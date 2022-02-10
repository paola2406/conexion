<!--MORENO ESPRZA PAOLA JANETH-->
<?php 

	$conexion=mysqli_connect('localhost','root','','conexion');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="./formulario.php">Formulario</a>
        </li>
    </div>
    <div>
        <h1 class="centrarcontenido">Acerca de mi</h1>
        <div class="datosPersonales">
            <h1>Nombre: </h1>
            <p>Moreno Esparza Paola Janeth</p>
            <p class="cursiv"> Acerca de mi</p>
            <p>Tengo 21 años voy en septimo semestres de la carrera, me gustan mucho los perros, hacer ejrcicio, salir y dormir.
              Me gusta mucho comer comida chatarra como los chetos, alitas, comida china. Soy una persona muy extrovertida aunque muy enojona</p>
            <p class="cursiv"> Mis Conocimientos</p>
              <ul>
                <li>Python</li>
                <li>C</li>
                <li>C++</li>
                <li>Java</li>
                <li>javascript</li>
              </ul>
            <p class="cursiv"> Mis Fortalezas</p>
            <ol>
                <li>Perseverante</li>
                <li>Servicial</li>
                <li>Extrovertida</li>
                <li>Inteligente</li>
            </ol>
         </div>
         
          <table border="1" >
              <tr>
                <td>id</td>
                <td>nombre</td>
                <td>correo</td>
                <td>genero</td>
                <td>ciudad</td>	
              </tr>

              <?php 
              $sql="SELECT * from infoformulario";
              $result=mysqli_query($conexion,$sql);

              while($mostrar=mysqli_fetch_array($result)){
              ?>
              <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['correo'] ?></td>
                <td><?php echo $mostrar['genero'] ?></td>
                <td><?php echo $mostrar['ciudad'] ?></td>
              </tr>
            <?php 
            }
            ?>
         </table>
        
    </div>
</body>
</html>
