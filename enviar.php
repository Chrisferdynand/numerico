<?php
    $destino="ferdynand_@msn.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST['correo'];
    $mensaje = $_POST['message'];
    $contenido = "Nombre: ".$nombre ."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
    mail($destino,"Numérico",$contenido);
    header("Location:gracias.html");
?>