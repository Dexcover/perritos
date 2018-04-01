<div class="container">
<div class="row">
	

<div style="margin-left: 40px; margin-right: 20px" class="col-md-12">
	

<h2 align="left">Información de solicitudes de perritos<br></h2> 
 <hr class="style18"> 



  <table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Perrito</th>
      <th>Nombre del Adoptante</th>
      <th>cédula</th>
      <th>edad</th>
      <th>sexo</th>
      <th>dirección</th>
      <th>telefono</th>
      <th>Estado</th>
    </tr>
  </thead>
  <tbody>
    <?php $cont=1; ?>
    <?php foreach ($solicitudes as $s): ?>
	<tr>
      <td><?php echo $cont++; ?></td>
      <td><img src="<?php echo base_url();?>Img_Perros/<?php echo $s['FOTO'];?>" style="height: 120px; width: 120px;" class="img-thumbnail" alt=""></td>
      <td><?php echo $s['APELLIDO_ADOPTANTE'];?></td>
      <td><?php echo $s['CEDULA'];?></td>
      <td><?php echo $s['EDAD'];?></td>
      <td><?php echo $s['SEXO_ADOPTANTE'];?></td>
      <td><?php echo $s['DIRECCION'];?></td>
      <td><?php echo $s['TELEFONO'];?></td>
      <td>
      	
      	<select id="estado" name="estado" class="form-control" onchange="cambiarEstado('<?php echo $s['ID_PERRO'] ?>')">
         <option class="active">En espera de su dueño</option>
         <option>Mascota ya adoptada</option>
    
      </td>
      
    </tr>	

    <?php endforeach; ?>	

   
  </tbody>
  </table>

      <a class="form-control btn-success" href="javascript:window.history.back();">&laquo; Volver atrás</a>




 </div>

 </div>
 </div>