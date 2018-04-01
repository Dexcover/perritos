<?php echo form_open('auth/index'); ?>

<link href="<?php echo base_url("assets/css/login.css");?>" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<div class="container">
	<div class="row" style="margin-top:20px" method="post">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form">
				<fieldset>
					<h2><img src="<?php echo base_url("assets/img/2047.png"); ?>" WIDTH=42 HEIGHT=42 BORDER=2 VSPACE=3 HSPACE=3 align=left/>Login Administrador</h2>
					<hr class="colorgraph">
					<div class="form-group">
	                    <input type="text" name="user" id="user" class="form-control input-lg" placeholder="Nombre de Usuario">
					</div>
					<div class="form-group">
	                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña">
					</div>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
	                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Ingresar">
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6">
							<a href="" class="btn btn-lg btn-primary btn-block">Cancelar</a>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>