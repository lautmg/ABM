<link rel="stylesheet" type="text/css" href="mystyles.css">
<?php
/*ob_start();*/

require('../model/usuarios_Modelo.php');
session_start();

$usuario = $_GET['usuario'];
$clave = $_GET['clave'];

$sql = "SELECT * from usuarios where nombre = '$usuario' and clave = '$clave'";

 $resultado = login($sql);

if($resultado<1){
	 $mensaje = "Clave o usuario incorrecto";
     echo "<script type='text/javascript'>alert('$mensaje');</script>";
     echo "<a href='LogIn.html'>Volver a la página de Login </a>";
     echo "<br><a href='altaUsuario.php'>registrarse </a>";
}
else{

    echo"<center>";
    echo "<p> Se inicia Sesión!!, Usuario: $usuario ";
   $_SESSION['usuario']  = $usuario;
   echo "<p><A HREF='/sesion/index.php'> Ir a menú principal --></A>";
  
}

   
  


?>