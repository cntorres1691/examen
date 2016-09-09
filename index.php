<?php
ini_set('display_errors', 1);

	include_once("/Modelo/visitaColector.php");
	$objVisita = new visitaColector();
	$visita = new visita();
?>
<!Doctype html>
 <html>
     <head>
	  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' 
	rel='stylesheet' type='text/css'>

 <link rel="stylesheet" href="/css/estilo.css">
     </head>
     <body>
	 <body class="fondo" id="page-top">
	<div class="container">
        <table>
          <?php
          
            foreach ($objVisita->consultarVisita() as $c) {
                ?>
                    
               <tr>
               <td class="celda"> <?php echo $c->getId_Visita(); ?> </td>
               <td class="celda"> <?php echo $c->getNumero_Visita(); ?> </td>
					   					      
	<td><input type="button" class="boton azul" name="btnEditar" 				value="Editar" OnClick="editarVisita.php?id=<?php echo $c->getId_Visita();?>"></td>
	<td><input type="button" class="boton azul" name="btnEliminar" value="Eliminar" OnClick="eliminarVisita.php?id=<?php echo $c->getId_Visita();?>"></td>
                     </tr>
                   <?php
            }
            ?>

          
</table>
</div>
</body>
</html>
