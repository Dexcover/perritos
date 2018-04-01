            <footer>
  				
			</footer>


			<script type="text/javascript">
				
			function cambiarEstado(id_perro){

				var parametros={
					"ID_PERRO":id_perro
				};

				$.ajax({
			          data:  parametros,
			          url:   '<?php echo base_url();?>index.php/Addperros/cambiarEstadoAnimalito',
			          type:  'post',
			          beforeSend: function () {
			          	
			          },
			          success:  function () {
			            alert("No se olvide de dar gracias a la persona por salvar a la mascota.");
			          }
			  });


			}

			</script>
        </body>

</html>
