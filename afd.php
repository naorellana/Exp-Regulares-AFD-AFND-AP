<div>
	<?php require_once ("vistas/header.php"); ?>
</div>
<div>
	<img src="imgs/AFDproyectoFinal.PNG" alt="..." class="img-thumbnail">
</div>

<div class="alert alert-secondary" role="alert">
  AFD con el lenguaje binario {1,0} para validar palabras de longitud impar que terminan en 0.
</div>

<div class="bg-light">
	<?php require_once ("vistas/formvalidaCadena.php"); ?>
</div>
<div class="bg-light">
	<?php require_once ("modelo/validaAF.php"); 
	?>
</div>



<div>
	<?php require_once ("modelo/archivoSubirLeer.php"); ?>
</div>
<div>
	<?php require_once ("vistas/footer.php"); ?>
</div>