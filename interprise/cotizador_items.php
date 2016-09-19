<div class="item_hijos">

	<div class="col-xs-12 col-sm-2">
								<div class="form-group">
									<label for="basicInput"></label>
			<input type="text" readonly value="<?php echo $_GET['id'] ?>" required class="form-control" name="reglon_id[]" id="id" placeholder="Id:">
								</div>
							</div>





	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput"></label>
			<input type="text" value="<?php echo $_GET['nombre'] ?>" required class="form-control autocomplete"  name="reglon_servicio[]" id="nombre" placeholder="Servicio:">
								</div>
							</div>


			<div class="col-xs-12 col-sm-4 hidden">
										<div class="form-group">
											<label for="basicInput"></label>
					<input type="text" readonly value="<?php echo $_GET['descripcion']  ?>" required class="form-control" name="reglon_descripcion[]" id="descripcion" placeholder="Descripción:">
										</div>
									</div>




		<div class="col-xs-12 col-sm-2">
									<div class="form-group">
										<label for="basicInput"></label>
				<input type="number" value="1" required class="form-control cantidad"  name="reglon_cantidad[]" id="cantidad" placeholder="Cantidad">
									</div>
								</div>

		<div class="col-xs-12 col-sm-2">
									<div class="form-group">
										<label for="basicInput"></label>
				<input type="text" readonly value="<?php echo $_GET['precio'] ?>" required class="form-control precio" name="reglon_precio[]" id="precio" placeholder="Precio:">
									</div>
								</div>



	<div class="col-xs-12 col-sm-2">
								<div class="form-group">
									<label for="basicInput"></label>
			<input type="text" readonly value="<?php echo $_GET['precio'] ?>" required class="form-control subtotal" name="reglon_subtotal[]" id="subtotal" placeholder="Subtotal:">
								</div>
							</div>



</div>

