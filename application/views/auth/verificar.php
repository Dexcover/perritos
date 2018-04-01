<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<? sesion_start();?>
<?php foreach ($user as $us):?>
        <?php $_SESSION["NOMBRE_USU"]= $us["user"];?>
<?php   endforeach; ?>
<link href="<?php echo base_url("assets/css/login.css");?>" rel="stylesheet">
<div class="container">
    <div class="row main">
        <div class="panel-heading">
           <div class="panel-title text-center">
                <h1 class="title">Bienvenido</h1>
                <h3 class="title"><?php echo $_SESSION["NOMBRE_USU"]?></h3>
                <hr />
            </div>
        </div>
        <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="list-group">
        
        <a class="list-group-item" href="<?php echo base_url(); ?>index.php/Addperros/info_perros"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Información Animales</a>
        <a class="list-group-item" href="<?php echo base_url(); ?>index.php/Addperros/index"><i class="fa fa-paw fa-fw" aria-hidden="true"></i>&nbsp; Ingresar Nuevo Animal</a>
        <a class="list-group-item" href="<?php echo base_url(); ?>index.php/Addperros/solicitudes"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Solicitudes animalitos</a>
        <a class="list-group-item" href="<?php echo base_url(); ?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp; Cerrar Sesión</a>
      </div>
    </div>
</div>
    </div>
</div><br>