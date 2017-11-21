<?php
$cadena=null;

?>
<div class="hidden">
	<?php //require_once("valida.php"); ?>
</div>

<div class="row bg-light">
  <div class="col-lg-12">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><br>
        <div class="input-group">
          <input type="text" class="form-control" name="cadena" placeholder="Ingrese La Cadena A Validar" aria-label="Ingrese La Cadena A Validar">
          <input type="hidden" class="form-control" name="expRg1" placeholder="Ingrese La Expresion Regular" aria-label="Ingrese La Expresion Regular" value="<?php echo "$expRg"; ?>" >
          <span class="input-group-btn">
            <button class="btn btn-primary" type="submit" name="envCad">Validar!</button>
          </span>
        </div>
    </form>
  </div>
</div>
<br>