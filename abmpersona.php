<html>

    <head>
    <title> PERSONAS </title>
    
    
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

        $idpersonas = $_GET['Personas_ID'];
            
        $sqlpersonas = "SELECT Personas_ID,Personas_Nombre,Personas_Apellido,Personas_Telefono,Personas_Email,Personas_Pais_ID FROM Personas WHERE Personas_ID = $idpersonas"; 
        $sqlpaises = "SELECT* FROM paises";
      
        $consulta_persona = $conn -> query($sqlpersonas);
        $consulta_pais = $conn -> query($sqlpaises);
      
      
      $register = $consulta_persona -> fetch_row();
      $Personas_Nombre = $register[1];
      $Personas_Apellido = $register[2];
      $Personas_Telefono = $register[3];
      $Personas_Email = $register[4];
      $Personas_Pais_ID = $register[5];
    ?>
          
      <form action = 'personaeditado.php' method= 'post' name= 'ingreso'>
    <input id='id_numero' name='id' type='hidden' value='<?php echo $idpersonas; ?>'>
    <h3>Baja y Modificacion de Personas</h3>
    <table >
        <tr> 
            <td >Nombre</td>
            <td><input   name='nombre_editado' type='text' value='<?php echo $Personas_Nombre; ?>'></td>
        </tr>
          
          <tr> 
            <td >Apellido</td>
            <td><input   name='apellido_editado' type='text' value='<?php echo $Personas_Apellido; ?>'></td>
            
        </tr>
        <tr> 
            <td >Telefono</td>
            <td><input   name='telefono_editado' type='text' value='<?php echo $Personas_Telefono; ?>'></td>
            
        </tr>

        <tr> 
            <td >Email</td>
            <td><input   name='email_editado' type='text' value='<?php echo $Personas_Email; ?>'></td>
            
        </tr>
        
        <td><label id='id_pais_persona'>País    
        <td><select name = "pais" required>
         <?php
            while($register2 = $consulta_pais->fetch_row()){
                if($register2[0] == $Personas_Pais_ID){
                    echo "<option value =$register2[0] selected>$register2[2]</option>"; 
                }
                echo "<option value =$register2[0]>$register2[2]</option>";
            }
        ?>
        </select></td>
        
        

        <tr>
            <td align="right"><input id='id_enviar' name='Opcion' type='submit' value='Actualizar'></td>
            <td align="left"><input id='id_eliminar' name='Opcion' type='submit' value='Eliminar'></td>
        </tr>
    </table>
    </form>
    <button type="submit" name="action" onclick="location.href='lista_personas.php'" ><i>Volver</i></button>
      
      
        
       </body>     
            
</html>
