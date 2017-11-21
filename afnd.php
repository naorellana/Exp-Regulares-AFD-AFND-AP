<div>
	<?php require_once ("vistas/header.php"); ?>
</div

<div>
	<img src="imgs/AFNDproyectoFinal.png" alt="..." class="img-thumbnail">
</div>

<div class="alert alert-secondary" role="alert">
  Utilizando el lenguaje con el alfabeto {a, b, c}, que reconozca las cadenas: abc, ccbba y bca
</div>

<div class="bg-light">
	<?php require_once ("vistas/formvalidaCadena.php"); ?>
</div>
<div class="bg-light">
	<?php require_once ("modelo/validaAFND.php"); 
	?>
</div>



<div>
	<?php require_once ("modelo/archivoSubirLeer.php"); ?>
</div>
<div>
	<?php require_once ("vistas/footer.php"); ?>
</div>