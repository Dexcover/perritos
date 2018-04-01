	<div class="container">
    	<div class="heading">
        	<h2>Perros en Adopción</h2>
        </div>
	        
	        <ol class="breadcrumb">
	    		<li><a href="<?php echo site_url('/') ?>">Home</a></li>
				<li class="active">Galeria de Perros</li>
			</ol>

			<div class="gal">
	    		<div class="row">

	    			<?php foreach ($perros as $perros_item): ?>
					<div class="tab-pane fade active in">
				        <div class="col-sm-3">
							<div class="product-image-wrapper" >
								<div class="single-products" data-in-stock="En Adopción" >
									<div class="productinfo text-center">
                                        <br></bt>
                                        
                                            <li class="no-bullets">
                                                <img src="<?php echo base_url();?>Img_Perros/<?php echo $perros_item['FOTO'];?>" style="height: 200px; width: 200px;" class="img-thumbnail" alt="">
                                                <h2><?php echo $perros_item['NOMBRE_PERRO'];?></h2>
                                                <p><?php echo $perros_item['EDAD_PERRO'];?></p>      
                                                <p><?php echo $perros_item['SEXO'];?></p>      
                                                <p><?php echo $perros_item['RAZA'];?></p>        
                                            </li>
                                        
										<a href="<?php echo site_url('home/'.$perros_item['id_perro']);?>" class="btn btn-default"><i class="fa fa-paw"></i> Ver Perro</a>
									</div>
								</div>
								<br>
							</div>

						</div> 
                            		
					<?php endforeach; ?>
					</div>
				</div>
        	</div>
    </div>
