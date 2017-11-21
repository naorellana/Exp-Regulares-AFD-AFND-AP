<div>
	<form class=" form-group#" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="subeArchivo">
        
	  <div class="row">
        <div class="col-12  ">
            <div class="input-group input-group-lg ">
                <span class="input-group-addon" id="sizing-addon1"><i class="material-icons">file_upload</i>
                </span> 
                <input type="file" class="form-control-file input-group-addon btn btn-block btn-secondary" id="exampleFormControlFile1" name="archivo[]">

            </div>
        </div> 
        <div class="col-12">
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><i class="material-icons">wrap_text</i>
                </span> 
                <input type="text" class="form-control" placeholder="Ingrese Un Caracter Delimitador" aria-label="Username" aria-describedby="sizing-addon1" name="delimitador">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-secondary" value="Enviar" name="Enviar" >Subir</button>
              </span>
            </div> 
        </div>
         
      </div>
	  
	  
	</form>
</div>
