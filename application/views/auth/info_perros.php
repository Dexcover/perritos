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
      <th>Nombre del Perro</th>
      <th>Edad</th>
      <th>Sexo</th>
      <th>Raza</th>
      <th>Estado</th>
      <th>Descripción</th>
    </tr>
  </thead>
  <tbody>
    <?php $cont=1; ?>
    <?php foreach ($info_perros as $s): ?>
	<tr <?php if ((int)$s['ESTADO']==0) {
          echo 'class="success"';
      }elseif ((int)$s['ESTADO']==1) {
          echo 'class="danger"';
          }; ?> >
      <td><?php echo $cont++; ?></td>
      <td><img style="height:120px; width: 600px;" src="<?php echo base_url();?>Img_Perros/<?php echo $s['FOTO'];?>" class="img-thumbnail" alt=""></td>
      <td><?php echo $s['NOMBRE_PERRO'];?></td>
      <td><?php echo $s['EDAD_PERRO'];?></td>
      <td><?php echo $s['SEXO'];?></td>
      <td><?php echo $s['RAZA'];?></td>
      <?php if ((int)$s['ESTADO']==0) {
           echo '<td>En Espera de su Dueño</td>';
      }elseif ((int)$s['ESTADO']==1) {
          echo '<td>Mascota Ya Adoptada</td>';
          }; ?> 
      <td><?php echo $s['DESC_PERRO'];?></td>
      <td>
      	
      </td>
      
    </tr>	

    <?php endforeach; ?>	

   
  </tbody>
  </table>
  <a class="form-control btn-success" href="javascript:window.history.back();">&laquo; Volver atrás</a>