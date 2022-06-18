<?php
    include("conexionBD.php");

    if(isset($_POST['registrar'])){
        $nombres =  trim ($_POST['nombres']);
        $apellidos = trim ($_POST['apellidos']);
        $email = trim ($_POST['email']);
        $contraseña = trim ($_POST['contraseña']);
        $nacimiento = trim ($_POST['nacimiento']);
        $confirmar_contraseña = trim ($_POST['confirmar_contraseña']);
        
        $consulta = "INSERT INTO `registro`(nombres, apellidos, email, contraseña, fecha_nacimiento) VALUES 
        ('$nombres','$apellidos','$email','$contraseña','$nacimiento')";
        
        $verificar_correo = mysqli_query($conex,"select * from registro where email = '$email'");

      if(mysqli_num_rows($verificar_correo) < 0){
        ?>
        <script>
          alert("el correo que esta ingresando ya se encuentra registrado");
        </script>
        <?php
        exit();
      }    
    
      if($contraseña <> $confirmar_contraseña){
        ?>
        <script>
          alert("las contraseñas no coinciden");
        </script>
        <?php
        exit();
      }
        
      $registro = mysqli_query($conex,$consulta);
        if($registro){
            ?>
            <script>
                alert("se ha registrado con exito ")
            </script> 
            <?php
        }
        else{
            ?>
            <script>
                alert("ups.. a ocurrido un error ")
            </script> 
            <?php
        }
    }
 ?>