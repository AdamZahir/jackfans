<?php

$conexion = new mysqli ("localhost", "id17409437_basezahira", "[ex=c#$5=Awi^\EX", "id17409437_contactosclientes");
if ($conexion) {
    echo "la gestion fue exitosa !!";
   /* header("location: index.php") ; */
} else {
    echo "fallo la gestion" ;
}

?>