<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	<title> Lista paises </title>
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	</head>
    <body>
    <table class="striped">
    <tr>
        <th>Id</th>
        <th>Pais</th>
    </tr>
    <?php
    
    $conexion=mysqli_connect("www.santilope.tk","santilop_santi_w","contraseña1216","santilop_SantiagoWEB");
    
    if($conexion->connect_error)
    {
        die("La conexion fallo: ".$conexion.connect_error);
    }
    $sql="SELECT * FROM paises";
    
    $resultado= $conexion->query($sql);
    
    if($resultado-> num_rows > 0)
    {
        while($row=$resultado->fetch_row())
        {
        echo "<tr><td>".$row[0]."</td><td>".$row[2]."</td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "0 result";
    }
    
    $conexion->close();
    
    ?>    
    </body>
       <button class="btn waves-effect waves-light" type="submit" name="action" onclick="location.href='http://santilope.tk/Agenda%20de%20contactos/home.php'" ><i class="material-icons right">VOLVER AL MENU</i> </button>
    
</html>