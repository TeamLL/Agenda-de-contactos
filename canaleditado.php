<html>
<head>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://santilope.tk/Agenda%20de%20contactos/lista_canales.php"> 
</head>
    
</html>
<?php



include 'conectar.php';;

if ($_POST["Opcion"] == "Actualizar"){

    $canal = $_POST["canal_editado"];
    $id = $_POST["id"];

    $consulta = $conn->query("UPDATE `Canales` SET `Canales_Nombre` = '$canal' WHERE `Canales`.`Canales_ID` = '".$id."'");
    if(!$consulta){
        die("Error");
    }
	else{
		$url_dest = "home.php";
		
    }
    echo "Se ha editado correctamente el canal, se le redireccionara a la lista de canales en 3 segundos ";
}
else{
    $id = $_POST["id"];
    $consulta = $conn->query("DELETE FROM `Canales` WHERE `Canales`.`Canales_ID` = '".$id."'");
    if(!$consulta){
        die("Error");
    
    }else{
		$url_dest = "home.php";
    }
    echo "Se ha eliminado correctamente el canal, se le redireccionara a la lista de canales en 3 segundos ";
}

mysqli_close($conn);
Header ("Location: ".$url_dest);
?>