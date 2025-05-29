<?php
include("conexion.php");
if(isse($_POST["contact"])){
    if(
        strlen($_POST['name'])>= 1 &&
        strlen($_POST['email'])> 1 &&
        strlen($_POST['direction'])> 1 &&
        strlen($_POST['phone'])> 1 &&
        strlen($_POST['message'])> 1 &&
        ){

            $name = trim($_POST['name']);
            $email= trim($_POST['email']);
            $direction=trim($_POST['direction']);
            $phone=trim($_POST['phone']);
            $message=trim($_POST['message']);
            $fecha=date("d/m/y");

            $consulta="INSERT INTO datos(nombre,email,direccion,telefono.mensaje,fecha)
            VALUES('$name','$email','$direction','$phone','$message','$fecha')";
            $resultado= mysqli_query($conex,$consulta);
            if ($resultado){
                ?>
                <h3 class="succes">tu registro se a completado</h3>
                <?php
            }else{
                ?>
                <h3 class="error">ocurrio un error</h3>
                <?php
            }

    }else{ ?> <h3 class="error">llena todos los campos</h3><?php}
}
?>