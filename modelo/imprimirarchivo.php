<?php 
    $texto = trim(file_get_contents("dataTemp/".$ar)); 
$palabra="";

echo "<p>
  <button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ContenidoArchivo\" aria-expanded=\"false\" aria-controls=\"ContenidoArchivo\">
    Revisar Contenido del archivo
  </button>
  <button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#RevCadenas\" aria-expanded=\"false\" aria-controls=\"RevCadenas\">
    Revision de Cadenas
  </button>
</p>
<div class=\"collapse\" id=\"ContenidoArchivo\">
  <div class=\"card card-body\">
    $texto
  </div>
</div>
<div class=\"collapse\" id=\"RevCadenas\">
  <div class=\"card card-body\">";
  for($i=0;$i<strlen($texto);$i++)
{

    if($texto[$i]!="#") {
        $palabra=$palabra.($texto[$i]);
    } else{
        echo " <div class=\"alert alert-danger\" role=\"alert\">
      $palabra
    </div>";
        $palabra="";}
    // Mostramos cada uno de los caracteres...
    // con $cadena[0] se muestra el primera caracter, [1], el segundo, etc...
    //echo "<br>".$texto[$i];
}
echo "    
  </div>
</div>";
    //$texto = file_get_contents("dataTemp/".$ar);
//echo $texto;
    ?>
 
<div>
    <?php require_once ("footer.php"); ?>
</div>


 ?>