      <article class="col-lg-10">
          <h3>Bienvenido alumno <?php echo $nombre;?></h3>  
          <?= form_open_multipart("Alumno/calificar")?>
				<?php
				//echo $error;
				?>
				<br>
				<br>
				<?php 
				echo form_label('Junit');
				$dataP=array('name'=>'Junit');
				echo form_upload($dataP);
				?>
				<br>
				<br>
				<?php
				echo form_label('Subir tarea');
				$dataA=array('name'=>'tarea');
				echo form_upload($dataA);
				?>
				<br>
				<br>
				<?php
				echo form_submit('','calificar');
				?>
			<?= form_close()?>

      </article>

