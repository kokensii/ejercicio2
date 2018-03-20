<?php

	echo '<form action="procesarLogin.php" method="POST">';
	echo '<fieldset>';
	echo '<legend>Usuario y contraseña</legend>';
	echo '<p><label>Name:</label>';
	echo '<input type="text" name="username"></p>';
	echo '<p><label>Password:</label>';
	echo '<input type="password" name="password"></p>';
	echo '<button type="submit">Entrar</button>';
	echo '</fieldset>';
	echo '</form>';

?>