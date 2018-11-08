<!DOCTYPE html>
<html lang="es">

<head>
    <title>Nueva Persona</title>

</head>

<body>
    <section>

        <form action="nuevapersona2.php" method="post" name="ingreso">
			<table align="center" width="50%" border="0" cellspacing="5" cellpadding="5">
			<tr> 
				<td colspan="2" align="center"><h1>Nueva Persona</h1></td>
	        </tr>					
	        <tr> 
				<td width="20%">Nombre</td>
				<td width="80%"><input name="nombre" type="text" id="id_nombre" size="50" required></td>
				
	        </tr>
	        <tr> 
				<td width="20%">Apellido</td>
				<td width="80%"><input name="apellido" type="text" size="50" required></td>
				
	        </tr>
	        <tr> 
				<td width="20%">Mail</td>
				<td width="80%"><input name="mail" type="text" size="50" required></td>
			
	        </tr>
	        <tr> 
				<td width="20%">Telefono</td>
				<td width="80%"><input  name="telefono" type="number" class="validate" required></td>
				
	        </tr>
	        <tr> 
				<td width="20%">País</td>
		        <td width="80%"><select name = "pais" required>
				<?php
              	include 'conectar.php';	            
               $consulta = $conn->query('SELECT * FROM `paises`');        
                while($fila = $consulta->fetch_row()){
                    echo "<option value =$fila[0]>$fila[2]</option>";             
                }
                ?>
				</select></td>
				
	        </tr>
			<tr>
				<td align="center"><input  name="enviar" type="submit" value="Enviar"></td>
			</tr>
			</table>
        </form>
           <button  type="submit" name="action" onclick="location.href='lista_personas.php'" ><i>VOLVER</i> </button>
    </section>
    
  
     
</body> 
</html>