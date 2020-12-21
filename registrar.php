<?php

include("con_db.php");

if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) >= 1) {
	    $nombre = trim($_POST['nombre']);
		$email = trim($_POST['email']);
		$mensaje = trim($_POST['mensaje']);
		$fechareg = date("d/m/y");
		$consulta = @"INSERT INTO `mensajes`(`id`, `nombre`, `email`, `mensaje`, `fechareg`) VALUES ('$id','$nombre','$email','$mensaje','$fechareg')";
		$resultado = @mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
			<h3 class="ok">¡Tu pedido se ha enviado correctamente!<br>Gracias por confiar en Nosotros</h3>
			<?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups, ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>