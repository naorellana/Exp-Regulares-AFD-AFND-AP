<?php
$expRg="";
?>

<div class="row bg-light">
  <div class="col-lg-12">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><br>
        <div class="input-group">
          <input type="text" class="form-control" name="expRg" placeholder="Ingrese La Expresion Regular" aria-label="Ingrese La Expresion Regular" >
          <input type="hidden" class="form-control" name="cadena" placeholder="Ingrese La Cadena A Validar" aria-label="Ingrese La Cadena A Validar">
          <span class="input-group-btn">
            <button class="btn btn-primary" type="submit" name="envExp">Agregar!</button>
          </span>
        </div>
    </form>
  </div>
