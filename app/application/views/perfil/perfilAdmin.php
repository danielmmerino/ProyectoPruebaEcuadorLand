<div class="container" >
	<button id="btnMostrarUsuarios" type="button" class="btn btn-success">Ocultar Registros (Ajax)</button>
	

	<div class="row" id="perfilAdministrador">
		<div class="col-sm-1" id="tablaNombres">
  			<h4>ID <br></h4> 
  			<?php 
			$q= $this->db->get('usuarios');
				foreach ($q->result() as $row) {
					echo $row -> id;
					echo "<br>";
				}
		 ?>
  		</div>
  		<div class="col-sm-2">
  			<h4>NOMBRE <br></h4> 
  			<?php 
			$q= $this->db->get('usuarios');
				foreach ($q->result() as $row) {
					echo $row -> nombre;
					echo "<br>";
				}
		 ?>
  		</div>
  		<div class="col-sm-2">
  			<h4>APELLIDO <br></h4> 
  			<?php 
			$q= $this->db->get('usuarios');
				foreach ($q->result() as $row) {
					echo $row -> apellido;
					echo "<br>";
				}
		 ?>
  		</div>
  		<div class="col-sm-2">
  			<h4>CORREO <br></h4> 
			<?php 
			$q= $this->db->get('usuarios');
				foreach ($q->result() as $row) {
					echo $row -> email;
					echo "<br>";
				}
		 ?>
  		</div>

  		<div class="col-sm-2">
  			<p>Fecha Registro <br></p> 
			<?php 
			$q= $this->db->get('usuarios');
				foreach ($q->result() as $row) {
					echo $row -> fecha_registro;
					echo "<br>";
				}
		 ?>
  		</div>

  		<div class="col-sm-1">
  			<p>Latitud <br></p> 
			<?php 
			$q= $this->db->get('usuarios');
				foreach ($q->result() as $row) {
					echo $row -> latitud;
					echo "<br>";
				}
		 ?>
  		</div>

  		<div class="col-sm-1">
  			<p>Longitud <br></p> 
			<?php 
			$q= $this->db->get('usuarios');
				foreach ($q->result() as $row) {
					echo $row -> longitud;
					echo "<br>";
				}
		 ?>
  		</div>
</div>
</div>
