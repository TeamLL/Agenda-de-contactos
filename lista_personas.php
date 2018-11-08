<!DOCTYPE html>
<html>

	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	<title>PERSONAS </title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	</head>
	<body>
		<table>
		<tr>
			<th> NOMBRE</th>
			<th> APELLIDO </th>
			<th> TELEFONO </th>
			<th> EMAIL </th>
			<th> PAIS </th>
			<th> ABM </th>
		</tr>
		
		
		<div >
	     	<h1><center> Agenda de contactos</center></h1>
    	    <ul ><center>
      		    <li >
      		        <a target="_self"  href="lista_canales.php">Canales</a> &nbsp; <a href="lista_personas.php">Personas</a> &nbsp; <a href="lista_contactos.php">Contactos</a>
      		    </li>
      	    </center></ul>
	    </div>
		
		
		
		<?php
		
		 
		  
	
		include 'conectar.php';	
		$sql = "SELECT Personas_ID,Personas_Nombre,Personas_Apellido,Personas_Telefono,Personas_Email,paises_nombre FROM Personas, paises WHERE Personas_Pais_ID = paises_id";
		$result = $conn -> query($sql);
			while ($row = $result-> fetch_row())
			{
				echo "<tr><td>"  . $row[1] ."</td><td>"  . $row[2] ."</td><td>"  . $row[3] ."</td><td>"  . $row[4] ."</td><td>"  . $row[5] ."</td><td><a href='abmpersona.php? Personas_ID=".$row[0]."'>Editar</a></td></tr>";
			}
			echo  "</table";
	
		$conn -> close();
		?>
		</table>
		
	 <button class="btn waves-effect waves-light" type="submit" name="action" onclick="location.href='nuevapersona.php'" ><i class="material-icons right">AGREGAR PERSONA</i> </button>
	 <button class="btn waves-effect waves-light" type="submit" name="action" onclick="location.href='home.php'" ><i class="material-icons right">VOLVER AL MENU</i> </button>
			
	</body>


</html>