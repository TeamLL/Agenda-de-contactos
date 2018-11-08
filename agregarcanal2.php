<html>
<head>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://santilope.tk/Agenda%20de%20contactos/lista_canales.php"> 
</head>
    
</html>



<?php	
	
	    
		include 'conectar.php';	
		
		
		$canal= $_POST["canal"];
		$insertar = "INSERT INTO `Canales` (`Canales_Nombre`) VALUES ('$canal')";
		echo "Se ha agregado correctamente el canal, en 3 segundos sera redireccionado a la lista de canales";
		mysqli_query($conn,$insertar);
		
		
		
		
		mysqli_close($conn);
	?>
		<html>
		

	
		
		
		
		</html>
		
		
		
		




