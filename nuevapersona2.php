<html>
     <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://santilope.tk/Agenda%20de%20contactos/lista_personas.php"> 
</html>


<?php


	include 'conectar.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["mail"];
$telefono = $_POST["telefono"];
$pais = $_POST["pais"];

$consulta = $conn->query("INSERT INTO `Personas` (`Personas_ID`, `Personas_Apellido`, `Personas_Nombre`,  `Personas_Email`, `Personas_Telefono`, `Personas_Pais_id`) ".
						" VALUES (NULL, '$apellido', '$nombre', '$mail', '$telefono', '$pais')");

if(!$consulta){
    die("Error");

}
echo "Se ha guardado correctamente la nueva persona se redireccionara a la lista de personas en 3 segundos";
mysqli_close($conn);

?>
     


