<link rel="stylesheet" type="text/css" href="mystyles.css">
<?php
// Iniciamos la sesion
session_start();
 

// Destruir todo en esta sesión
session_destroy();

echo "<center><p>La sesión fue finalizada";

echo"<p><A href='LogIn.html'> Ingresar nuevamente: --></a></center>";
?>