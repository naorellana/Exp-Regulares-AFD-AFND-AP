<?php 
       $expRg="/^abc|ccbba|bca/"; 
?>
<?php 
        if(isset($_POST['envCad'])) 
        { 
            $cadena =$_POST['cadena'];
            //$expRg =$_POST['expRg1'];
        }
?>
<div>
    <div class="alert alert-primary" role="alert">
      Expresion Regular Ingresada : <?php echo "$expRg"; ?>
    </div>
    <?php 
    	if (preg_match($expRg, $cadena)==1) {
				# code...
				echo "<div class='alert alert-success' role='alert'>
      La Cadena: '$cadena' Es <b>VALIDA</b> para la Expresion Regular '$expRg'
    </div>";
			}
			else{
				echo "<div class='alert alert-danger' role='alert'>
      La Cadena '$cadena' Es <b>INVALIDA</b> Para La Expresion Regular '$expRg' 
    </div>";
			}
     ?>
