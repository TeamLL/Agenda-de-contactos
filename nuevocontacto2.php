<html>
    <head>
        <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://santilope.tk/Agenda%20de%20contactos/lista_contactos.php"> 
    </head>
    
</html>



<?php

echo "Se agrego correctamente el nuevo contacto, sera redireccionado a la lista de contactos";
Include'conectar.php';


$id_persona = $_POST["contacto_persona"];
$id_canal = $_POST["contacto_canal"];
$comentario = $_POST["comentario"];
$fecha = $_POST["contacto_fecha"];



$consulta = $conn->query("INSERT INTO `Contactos` (`Contactos_ID`, `Contactos_Personas_ID`, `Contactos_Canal_ID`, `Contactos_Fecha`, `Contactos_Observacion`) ".
						" VALUES (NULL, '$id_persona', '$id_canal', '$fecha','$comentario')");
if(!$consulta){
    die("Error");
}
mysqli_close($conn);
?>

  
  
  