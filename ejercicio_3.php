<?php
    // Acá como se está recibiendo
    if($_GET) {
        $nombre=$_GET['nombre'];
        print_r("Hola ".$nombre);
    } else {
        print_r("Vuelva al HTML e ingrese un nombre");
    }
?>