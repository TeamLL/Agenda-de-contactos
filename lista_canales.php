<!DOCTYPE html>
<html>

	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	<title> CANALES </title>
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	</head>
	
	<body>
	    
	        <div >
	     	<h1><center> Agenda de contactos</center></h1>
    	    <ul ><center>
      		    <li >
      		        <a target="_self"  href="lista_canales.php">Canales</a> &nbsp; <a href="lista_personas.php">Personas</a> &nbsp; <a href="lista_contactos.php">Contactos</a>
      		    </li>
      	    </center></ul>
	        </div>

		<table>
		<tr>
			<th> Nombre de canal</th>
			<th> ABM</th>
		</tr>
		<?php	
	  include 'conectar.php';	
			
		$sql = " SELECT*  FROM Canales ";
		$result = $conn -> query($sql);
			while ($row = $result-> fetch_row())
			{
				echo "<tr>
				        <td>".$row[1]  ."</td>
				        <td><a href='detallecanal.php? Canales_ID=".$row[0]."'>Editar</a></td>
				      </tr>";
			}
			

						
						
					
		$conn -> close();
		?>
		</table>
		
	   <button class="btn waves-effect waves-light" type="submit" name="action" onclick="location.href='http://santilope.tk/Agenda%20de%20contactos/agregarcanal.php'" ><i class="material-icons right">AGREGAR CANAL</i> </button>
	   <button class="btn waves-effect waves-light" type="submit" name="action" onclick="location.href='http://santilope.tk/Agenda%20de%20contactos/home.php'" ><i class="material-icons right">VOLVER AL MENU</i> </button>
		
	</body>


</html>