 <article class="col-lg-10">
 	<h3>Alumno: <?php echo $nombreAlumno." ".$apaternoAlumno." ".$amaternoAlumno;?></h3> 
 	<br><br>
 	<h5>UEAS</h5>
 	<br>
 	<table class="table table-bordered table-hover">
	 	<thead>	
	 		<tr>
	 			<th>Tirmestre</th>
	 			<th>UEA</th>
	 			<th>Nombre UEA</th>
	 			<th>Profesor</th>
	 			<th>Acciones</th>
	 		</tr>
	 	</thead>
		 <tbody>
		 	<?= form_open("tareas_alumno") ?>	
	 		<tr>
	 			<td><?php echo $trimestre?></td>
	 			<td><?php echo $cveuea?></td>
	 			<td><?php echo $nomuea?></td>
	 			<td><?php echo $nombreProfesor." ".$apaternoProf." ".$amaternoProf?></td>
	 			<td align="center"><input type="submit" class="btn btn-success" value="Ver Tareas"/></td>
	 		</tr>
	 		<input type="hidden" name="mat" value='<?php echo $matricula ?>'>
	 		<?= form_close() ?>
	 	</tbody>

 	</table>
 	 
 </article>