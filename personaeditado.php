<html>
     <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://santilope.tk/Agenda%20de%20contactos/lista_personas.php"> 
</html>


<?php
 include 'conectar.php'; 

if ($_POST["Opcion"] == "Actualizar") {
    $nombre = $_POST["nombre_editado"];
    $apellido = $_POST["apellido_editado"];
    $mail = $_POST["email_editado"];
    $telefono = $_POST["telefono_editado"];
    $pais = $_POST["pais"];
    $id = $_POST["id"];
    
    $consulta = $conn->query("UPDATE `Personas` SET `Personas_Nombre` = '$nombre', `Personas_Apellido` = '$apellido',`Personas_Email` = '$mail' ,`Personas_Telefono` = '$telefono', `Personas_Pais_ID` = '$pais' WHERE `Personas`.`Personas_ID` = '$id'");

    if(!$consulta){
        die("Error");
    }
    else{
        $url_dest = "http://santilope.tk/Agenda%20de%20contactos/home.php";
    }
    echo "Se ha actualizado correctamente la persona, sera redireccionado a la lista de personas en 3 segudos";
}
else{
    $id = $_POST["id"];
    $consulta = $conn->query("DELETE FROM `Personas` WHERE `Personas`.`Personas_id` = '".$id."'");
    
    if(!$consulta){
        die("Error");
    }
    else{
        $url_dest = "home.php";
    }
    echo "Se ha eliminado correctamente la persona, sera redireccionado a la lista de personas en 3 segudos";
}

mysqli_close($base);
Header ("Location: ".$url_dest);
?>