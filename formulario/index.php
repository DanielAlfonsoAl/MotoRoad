<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Registro MR</title>
    <link rel="stylesheet" href="registroMT.css">
</head>

<body>
      <div class="todoP">
        <div class="todoH">
         <div class="bienvenida">
            <h1>Quieres ser conductor?</h1>
            <h3>Registrate facil y rapido con nosotros para comenzar a trabajar con nosotros </h3>
        </div>
        <div class="form">
           <div class="formulario">
               <h2>Registro</h2>
            <form action="" method="post">
                <input class="datos" name="nombres" type="text" placeholder="Nombres" required>
                <input class="datos" name="apellidos" type="text" placeholder="apellidos">
                <input class="datos" name="email" type="text" placeholder="Correo electronico" required>
                <input class="datos" name="contraseña" type="password" placeholder="Ingresa una contraseña" required> <br>
                <input class="datos" name="confirmar_contraseña" type="password" placeholder="confirmar contraseña" required> <br>

                <strong>Fecha de nacimiento </strong>
                <input type="date" id="edad" name="nacimiento"> <br>
                <strong>Genero:</strong> 
                Hombre<input type="radio" name="sexo" value="hombre"> 
                Mujer <input type="radio" name="sexo" value="mujer"> <br>
                <input type="checkbox" required> soy mayor de edad <br>
                <input type="checkbox" required> tengo mis papeles al dia <br>
                <input type="submit" value="Registrar" id="registrar" name="registrar">
            </form>
         </div> 
        </div>

        </div>
   
      </div>
      
     
      <?php

    include("registro.php");
      ?>








    

</body>

</html>