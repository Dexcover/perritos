<div class="container">
    	<div class="heading">
        	<h2>Estas a un paso para que esta hermosa mascota sea adoptada por ti.</h2>
        </div>	        
	        <ol class="breadcrumb">
        		<li><a href="<?php echo site_url('/') ?>">Home</a></li>
        		<li><a href="<?php echo site_url('Home/gal_perros') ?>">Perros en Adopoción</a></li>
                <li><a href="<?php echo site_url('home/'.$perros_item['id_perro']) ?>">Perro seleccionado</a></li>
    			<li class="active">Información de solicitante</li>
    		</ol>

              <?php if(isset($mensaje)): ?>

                    <?php echo $mensaje; ?>

                <?php endif ?>


    		<div class="row">
    			<div class="col-md-4" align="center">
    				<img src="<?php echo base_url();?>Img_Perros/<?php echo $perros_item['FOTO'];?>" WIDTH=300 HEIGHT=300 class="img-thumbnail" alt="">		
    			</div>
    			<div class="col-md-4">
    				<h2 align="left"><?php echo $perros_item['NOMBRE_PERRO'].'<br>';?></h2>
    				<hr class="style18">
    				<h4>Edad</h4><p><?php echo $perros_item['EDAD_PERRO'].'<br>';?></p>
    				<h4>Raza</h4><p><?php echo $perros_item['RAZA'].'<br>';?></p>
    				<h4>Sexo</h4><p><?php echo $perros_item['SEXO'].'<br>';?></p>
    				<h4>Descripción</h4><p><?php echo $perros_item['DESC_PERRO'].'<br>';?></p>
    						
    			</div>

                <div class="col-md-4">
                  <h2 align="left">Tu información<br></h2> 
                  <hr class="style18">

                  <form action="<?php echo base_url(); ?>index.php/Adoptar/perritos" method="post">
                        <input type="hidden" name="id_perro" value="<?php echo $perros_item['id_perro'];?>">

                       <label>Tu nombre</label> 
                       <input class="form-control" type="text" name="nombre" required="true">

                        <label>Tus apellidos completos</label> 
                       <input class="form-control" type="text" name="apellidos" required="true">
                       
                        <label>Tu cédula</label> 
                       <input class="form-control" type="number" name="cedula" required="true" maxlength="10">
                       
                        <label>Tu edad</label> 
                       <input class="form-control" type="number" name="edad"  required="true">
                       
                        <label>Tu sexo</label> 
                            <select name="sexo" class="form-control">
                              <option class="active">Hombre</option>
                              <option>Mujer</option>
                              <option>Otro</option>
                            </select>

                       
                        <label>Tu dirección</label> 
                       <input class="form-control" type="text" name="dirección" required="true">
                       
                        <label>Tu teléfono</label> 
                       <input class="form-control" type="number" name="telefono" required="true">
                       
                       <input style="margin-top: 10px" class="form-control btn-success" type="submit" name="Solicitar">
                   
                  </form>

                </div>
    			
    		</div>
    		
			
    			
		</div>