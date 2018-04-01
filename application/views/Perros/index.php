<div class="row">
	
<?php if(isset($mensaje)): ?>

    <?php echo $mensaje; ?>

<?php endif ?>

</div>


<div class="row">
	

<div class="col-md-offset-4 col-md-4">
	

<h2 align="left">Módulo para agregar perritos al sistema<br></h2> 
 <hr class="style18">                 

<form enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Addperros/registrar" method="post">

	<label>NOMBRE DEL PERRO</label>
	<input class="form-control" type="text" name="name" required="true">

	<label>EDAD PERRO</label>
	<input class="form-control" type="text" name="edad" required="true">


	<label>Descripción del Perro</label>
	<textarea class="form-control" name="descripcion" required="true"> </textarea> 

	<label>RAZA</label>
	<input class="form-control" type="text" name="raza" required="true">

	<label>ESTADO</label>
	
	<select name="estado" class="form-control" >
                              <option class="active">Activo</option>
                              <option>Desactivado</option>
  
    </select>

    <label>SEXO DE LA MASCOTA</label> 
                            <select name="sexo" class="form-control">
                              <option class="active">Macho</option>
                              <option>Hembra</option>
                              
                            </select>


	<label>FOTO</label>
	<input type="hidden" name="MAX_FILE_SIZE" value="200000" />
	<input style="margin-bottom: 10px" type="file" name="uploadedfile" required="true" accept=".jpg"> 
	<p style="color: red">Recuerde que para subir una foto de la mascota, no exceder el máximo permitido y la fotografia en formato .jpg</p>

	<input class="form-control btn-success" style="margin-top: 50px" class="form-control" type="submit" name="Registrar" value="Registrar">
</form>



</div>


	
</div>

<div class="container">
	
<a style="margin-top: 20px" class="form-control btn-primary" href="javascript:window.history.back();">&laquo; Volver atrás</a>
</div>