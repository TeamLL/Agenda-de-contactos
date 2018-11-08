<?php
    	$host = www.santilope.tk;
		$user = santilop_santi_w;
		$pass = contraseña1216;
		$dbname= santilop_SantiagoWEB;

$conn = mysqli_connect ($host,$user,$pass,$dbname); //aca conecta con la base de datos 
	if ($conn-> connect_error) // controla si pudo conectar
	{
		die("connection_error:". $conn->connect_error);
	}
?>	
	