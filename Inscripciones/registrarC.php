<?php

include("con_bd.php");

if ( isset ($_POST ['registro'])){//si se apreto en la variable entonces controla que no este vacio algunos de los campos
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1){ //el strlen para detectar la cantidad de caracteres
        $nombre = trim($_POST['nombre']); //con el trim lo que hace es remover el espacio del inicio y dle final
        $apellido = trim($_POST['apellido']);
        $dni = trim($_POST['dni']);
        $fecha_nac = trim($_POST['fecha_Nac']);
        $email = trim($_POST['email']);
        $celular = trim($_POST['celular']);
        $cat=trim("Competencia");
        $fecha_reg = date("d / m / y");

        $consulta = "INSERT INTO inscrip(nombre, apellido,dni,fecha_Nac, email, celular,cat, fecha_reg) VALUES ('$nombre','$apellido','$dni','$fecha_nac','$email','$celular','$cat','$fecha_reg')";  //PARA HACER LA CONSULTA
        $resultado = mysqli_query($conex,$consulta); //PARA EJECUTAR

        if( $resultado) {
            ?>
            <h3 class="ok">¡TE HAS INSCRIPTO CORRECTAMENTE!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">¡up ha ocurrido un error!</h3>
            <?php
        }
        
    }  else {
         ?>
         <h3 class="bad">¡POR FAVOR COMPLETE LOS CAMPOS!</h3>
          <?php
     
        }

}

?>