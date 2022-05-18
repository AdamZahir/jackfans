<?php

include ("abre.php");
    $Correo    = $_POST['Correo'];
    $Nombre    = $_POST['Nombre'];
    $Apellido  = $_POST['Apellido'];
    $Edad      = $_POST['Edad'];
    

    $consulta = "INSERT INTO Suscripciones (Correo, Nombre, Apellido, Edad) 
    VALUES ('$Correo', '$Nombre', '$Apellido', '$Edad')" ;

    if ($conexion-> query($consulta) === TRUE) {
       /* header ("Location: index.php");*/
    } 
    else {
        echo  "Error:" . $consulta . "<br>" . $conexion ->error;
    }

    $conexion -> close ();
    
    ?>