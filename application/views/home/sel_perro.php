<div class="container">
    	<div class="heading">
        	<h2>Perros Seleccionado para Adopción</h2>
        </div>	        
	        <ol class="breadcrumb">
        		<li><a href="<?php echo site_url('/') ?>">Home</a></li>
        		<li><a href="<?php echo site_url('Home/gal_perros') ?>">Perros en Adopoción</a></li>
    			<li class="active">Perro Seleccionado</li>
    		</ol>
    		<div class="row">
    			<div class="col-md-6" align="center">
    				<img src="<?php echo base_url();?>Img_Perros/<?php echo $perros_item['FOTO'];?>" WIDTH=300 HEIGHT=300 class="img-thumbnail" alt="">		
    			</div>
    			<div class="col-md-6">
    				<h2 align="left"><?php echo $perros_item['NOMBRE_PERRO'].'<br>';?></h2>
    				<hr class="style18">
    				<h4>Edad</h4><p><?php echo $perros_item['EDAD_PERRO'].'<br>';?></p>
    				<h4>Raza</h4><p><?php echo $perros_item['RAZA'].'<br>';?></p>
    				<h4>Sexo</h4><p><?php echo $perros_item['SEXO'].'<br>';?></p>
    				<h4>Descripción</h4><p><?php echo $perros_item['DESC_PERRO'].'<br>';?></p>
    				<hr width="0">
    				<a href="<?php echo site_url('Adoptar/index/'.$perros_item['id_perro']);?>" class="btn btn-success" style="text-align: center;"><i class="fa fa-paw"></i> Adoptar</a>		
    			</div>
    			
    		</div>
    		
			
    			
		</div>
</div>