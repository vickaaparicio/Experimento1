
<div class="col-md-6 contact-form">
	<form method="post" action="form.php">
		<input type="text" name="nombre"  placeholder="Nombre" required="">
		<input type="mail" name="correo"  placeholder="Correo" required="@">
		<input type="mail" name="correo2" placeholder="Confirmar Correo" required="@">
		<select name="asunto" placeholder="Asunto">
			<option value="casas">Casas</option>
			<option value="edificios">Edificios</option>
			<option value="terrenos">Terrenos</option>
		</select>
		<textarea name="mensaje" placeholder="Mensaje" required=""></textarea>
		<input type="submit" value="ENVIAR">
	</form>
</div>
