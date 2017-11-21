
<div>
    <?php require_once ("./vistas/formCargaArchivo.php"); ?>
</div>


    <?php
    #source https://www.lawebdelprogramador.com/codigo/PHP/2580-Subir-uno-o-varios-archivos-al-servidor-y-mover-los-a-una-carpeta.html
    # definimos la carpeta destino
    $carpetaDestino="dataTemp/";
 	try {

    # si hay algun archivo que subir
    if($_FILES["archivo"]["name"][0])
    {
 
        # recorremos todos los arhivos que se han subido
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
 
            # si es un formato de imagen ver m'as formatos en: http://www.freeformatter.com/mime-types-list.html 
            if($_FILES["archivo"]["type"][$i]=="text/html" || $_FILES["archivo"]["type"][$i]=="text/plain" || $_FILES["archivo"]["type"][$i]=="application/pdf" || $_FILES["archivo"]["type"][$i]=="text/csv
                " || $_FILES["archivo"]["type"][$i]=="application/vnd.ms-excel" || $_FILES["archivo"]["type"][$i]=="text/json" || $_FILES["archivo"]["type"][$i]=="application/vnd.ms-excel.addin.macroenabled.12" || $_FILES["archivo"]["type"][$i]=="application/vnd.ms-excel.sheet.macroenabled.12" || $_FILES["archivo"]["type"][$i]=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $_FILES["archivo"]["type"][$i]=="application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $_FILES["archivo"]["type"][$i]=="application/msword" || $_FILES["archivo"]["type"][$i]=="application/xml" || $_FILES["archivo"]["type"][$i]=="application/xhtml+xml" || $_FILES["archivo"]["type"][$i]=="text/xml" || $_FILES["archivo"]["type"][$i]=="application/json" || $_FILES["archivo"]["type"][$i]=="text/json") 

                

                
            {
 
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
 
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                    	$ar=$_FILES["archivo"]["name"][$i];
                        echo "<div class='alert alert-success' role='alert'> "
						  .$_FILES['archivo']['name'][$i]." - EL archivo Se Cargo Exitosamente
						</div>";
                    }else{
                        echo "<div class='alert alert-warning' role='alert'>
						  No se ha podido mover el archivo:" .$_FILES['archivo']['name'][$i]. "
						</div>"; 
                    }
                }else{
                    echo "No se ha podido crear la carpeta: up/".$user;
                }
            }else{
            	echo "<div class='alert alert-danger' role='alert'> "
						  .$_FILES['archivo']['name'][$i]." - FORMATO NO VALIDO (PDF, TXT, HTML, CSV, XLSX, DOCX, XML)
                          <p><a href='http://tools.knowledgewalls.com/'>Puede convertir su archivo ingresando aqui </a> </p>
						</div>"; 
            }
        }
    }else{
        echo "<div class='alert alert-warning' role='alert'>
  No se ha subido ningun archivo de texto
</div>";
    }
 		} catch (Exception $e) {
	
	}   
$texto = trim(file_get_contents("dataTemp/".$ar)); 
$palabra="";

echo "<p>
  <button class=\"btn btn-primary btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ContenidoArchivo\" aria-expanded=\"false\" aria-controls=\"ContenidoArchivo\">
    Revisar Contenido del archivo
  </button>
  <button class=\"btn btn-primary btn-block\" type=\"button\" data-toggle=\"collapse\" data-target=\"#RevCadenas\" aria-expanded=\"false\" aria-controls=\"RevCadenas\">
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
      $delimitador="";
  if(isset($_POST['Enviar'])) 
        { 
            $delimitador =$_POST['delimitador'];
            //$expRg =$_POST['expRg1'];
        }
  for($i=0;$i<strlen($texto);$i++)
{

    if($texto[$i]!=$delimitador) {
        $palabra=$palabra.($texto[$i]);
    } else{
        //
        require_once ("modelo/clasePila.php");
      // Creamos la pila
$stack = new Stack();
//procedimiento PRINCIPAL AUTOMATA DE PILA
$validacionPila;
$primerCaracter="";
$caracter="";
$textoPila=$palabra; 
for($j=0;$j<strlen($textoPila);$j++){ 
  $caracter=substr($textoPila,$j,1);
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
if ($stack->length()==0 && $textoPila!="") {
  # code...
  $validacionPila=True;
  //echo "Automata de Pila Aceptado";
}
else{
  $validacionPila=False;
  //echo "Cadena INVALIDA";
}
//Find Procedimiento automata 
        //
            if (preg_match($expRg, trim($palabra))==1 && $validacionPila==true) {
                        # code...
                        echo "<div class='alert alert-success' role='alert'>
              La Cadena: '$palabra' Es <b>VALIDA</b> para la Expresion Regular '$expRg'
            </div>";
                    }
                    else{
                        echo "<div class='alert alert-danger' role='alert'>
              La Cadena '$palabra' Es <b>INVALIDA</b> Para La Expresion Regular '$expRg' 
            </div>";
                    }
                    $palabra="";
    }
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


