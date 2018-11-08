<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>    
        
        
        
    <title>Tabla de Mysql</title>
    <div >
	     	<h1><center> Agenda de contactos</center></h1>
    	    <ul ><center>
      		    <li >
      		        <a target="_self"  href="lista_canales.php">Canales</a> &nbsp; <a href="lista_personas.php">Personas</a> &nbsp; <a href="lista_contactos.php">Contactos</a>
      		    </li>
      	    </center></ul>
	        </div>
    <style>
        
        table.
        {
            border-collapse:collapse;
            width:100%;
            color:#588c7e;
            font-family:sans-serif;
            font-size:24px;
            text-align:left;
        }
    </style>    
    </head>
    <body>
    <table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Pais</th>
        <th>Canal</th>
        <th>Observacion</th>
        <th>Fecha de contacto</th>
    </tr>
    <?php
    
    Include'conectar.php';
      
      
     $sql = "SELECT Personas_Nombre,Personas_Apellido,Personas_Telefono,Personas_Email,paises_nombre,Canales_Nombre,Contactos_Observacion,Contactos_Fecha FROM Contactos,Personas,paises,Canales WHERE Contactos_Personas_ID=Personas_ID AND Personas_Pais_ID = paises_id AND Canales_ID=Contactos_Canal_ID"; 
    $resultado= $conn->query($sql); 
      
   /*
		$consulta = $conn->query('SELECT * FROM `contacto`');
    $personas = $conn->query("SELECT `Personas_Apellidos`, `Personas_Nombres` FROM `Personas`,`Contactos` WHERE `Contactos_Persona_ID` = `Personas_ID`");
    $canales = $conn->query("SELECT `Canales_Nombre` FROM `Canales`,`Contactos` WHERE `Contactos_Canal_ID` = `Canales_ID`");
    */
    /*$sql = "SELECT Personas_Nombre,Personas_Apellido,Personas_Telefono,Personas_Email,paises_nombre,  FROM Contactos,Personas, paises WHERE Personas_Pais_ID = paises_id";*/
    
  
      
while($row=$resultado->fetch_row())
        {
        echo "<tr><td>".$row[0]."</td>
        					<td>".$row[1]."</td>
                  <td>".$row[2]."</td>
                  <td>".$row[3]."</td>
                  <td>".$row[4]."</td>
                  <td>".$row[5]."</td>
                  <td>".$row[6]."</td>
                  <td>".$row[7]."</td>
              </tr>";
        
       
    }
   $conn->close();
    ?>
 </table>    
   
    
    
       <button class="btn waves-effect waves-light" type="submit" name="action" onclick="location.href='nuevocontacto.php'" ><i class="material-icons right">AGREGAR CONTACTO</i> </button>
	   <button class="btn waves-effect waves-light" type="submit" name="action" onclick="location.href='home.php'" ><i class="material-icons right">VOLVER AL MENU</i> </button>
    </body>
</html>
  
  
  
  
  
  