<?php 
$hijos_nombre = unserialize( $data['data'][0]['hijos_nombre'] );	
$hijos_apellidos = unserialize( $data['data'][0]['hijos_apellidos'] );	
$hijos_fecha_nacimiento = unserialize( $data['data'][0]['hijos_fecha_nacimiento'] );	
$hijos_documentos = unserialize( $data['data'][0]['hijos_documentos'] );	


if (is_array($hijos_nombre)) {

foreach ($hijos_nombre  as $key => $value) {


	






 ?>


 <div class="item_hijos_ex">
	<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label for="basicInput">Hijo Nombre</label>
			<input type="text" value="<?php echo $hijos_nombre[$key] ;?>"  class="form-control" name="hijos_nombre[]" id="hijos_nombre[]" placeholder="Hijo Nombre">
								</div>
							</div>


							
								<div class="col-xs-12 col-sm-3">
															<div class="form-group">
																<label for="basicInput">Hijo Apellido</label>
										<input type="text" value="<?php echo $hijos_apellidos[$key]; ?>"  class="form-control" name="hijos_apellidos[]" id="hijos_apellidos[]" placeholder="Hijo Apellido">
															</div>
														</div>
							



	<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label for="basicInput">Hijo fecha de nacimiento</label>
			<input type="date" value="<?php echo $hijos_fecha_nacimiento[$key] ;?>"  class="form-control" name="hijos_fecha_nacimiento[]" id="hijos_fecha_nacimiento[]" placeholder="Hijo fecha de nacimiento">
								</div>
							</div>



							
								<div class="col-xs-12 col-sm-3">
															<div class="form-group">
																<label for="basicInput">Hijo documento</label>
										<input type="text" value="<?php echo $hijos_documentos[$key]; ?>"  class="form-control" name="hijos_documentos[]" id="hijos_documentos[]" placeholder="Hijo documento">
															</div>
														</div>

</div>

<?php } } ?>