<?php 
       $expRg="/^(x|y)*(y|x)*$/"; 
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
      require_once ("modelo/clasePila.php");
      // Creamos la pila
$stack = new Stack();
//procedimiento PRINCIPAL AUTOMATA DE PILA
$validacionPila;
$primerCaracter="";
$caracter="";
$texto=$cadena; 
for($i=0;$i<strlen($texto);$i++){ 
  $caracter=substr($texto,$i,1);
    //echo substr($texto,$i,1); 
    
    if ($stack->length()>0) {
      if ($caracter==$primerCaracter){
        $stack->push('v');
      }
      else {
        $stack->pop();
      }
    }
    elseif ($stack->length()==0 && $caracter!=""){
      $primerCaracter=$caracter;
      $stack->push('v');
      //echo " tiene informaccion";
      //echo $stack->peek();
    }
    
}  
if ($stack->length()==0 && $texto!="") {
  # code...
  $validacionPila=True;
  //echo "Automata de Pila Aceptado";
}
else{
  $validacionPila=False;
  //echo "Cadena INVALIDA";
}
//Find Procedimiento automata 
    	if (preg_match($expRg, $cadena)==1 && $validacionPila==true) {
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
