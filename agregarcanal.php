<!DOCTYPE html>
<html>
	<head>
	        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	
		<div class="row">
    <div class="col s12">
      <div class="row">
      </div>
    </div>
  </div>
	</head>
	<body>
		<h1>AGREGAR CANAL</h1>
            Ingrese el nuevo canal:<br />
		<form action = "agregarcanal2.php" method ="POST">
	       <input type="text" name="canal"> 
	      <!-- <input type="submit" value ="guardar">-->
	       <button class="btn waves-effect waves-light" type="submit" value="guardar" ><i class="material-icons right">Guardar</i> </button>
        </form>	
	  <button class="btn waves-effect waves-light" type="submit" name="action" onclick="location.href='lista_canales.php'" ><i class="material-icons right">VOLVER</i> </button>			
	 
			
		
	</body>
</html>