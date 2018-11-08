<html>

	<head></head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
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
	    <?php
  		include 'conectar.php';	

  		$idcanales = $_GET['Canales_ID'];
			
  		$sqlcanales = "SELECT Canales_ID,Canales_Nombre FROM Canales WHERE Canales_ID = $idcanales"; 
  
		$consulta_canal = $conn -> query($sqlcanales);
		$register = $consulta_canal -> fetch_row();
		$canal_nombre = $register[1];

  	?>
      <form action = 'canaleditado.php' method= 'post' name= 'ingreso'>
	  <input name='id' type='hidden' value='<?php echo $idcanales; ?>'>
	  <h3>Baja y Modificacion de Canales</h3>
	<table >
	    <tr>
	        <th >Nombre</th> 
	    </tr>
		<tr>
		    
			<td><input name='canal_editado' type='text' value=<?php echo $register[1]; ?>></td>
		</tr>
		
		
		
	</table>
	
	 <button class="btn waves-effect waves-light" type="submit" name="Opcion" value='Actualizar'>
     <i class="material-icons right">Actualizar</i>
     </button>
	
	 <button class="btn waves-effect waves-light" type="submit" name="Opcion" value='Eliminar'>
     <i class="material-icons right">Eliminar</i>
     </button>
	
	
	</form>
	 <button class="btn waves-effect waves-light" type="submit" name="action" onclick="location.href='lista_canales.php'" ><i class="material-icons right">Volver</i></button>
	
      
      
        
	   </body>     
	        
</html>