<?php
    if(!isset($_SESSION)){
        session_start();
        
    }
    if(!isset($_SESSION['usuario'])){
        header("location:/sesion/view/LogIn.html");
    }
   
    $usuario = $_SESSION['usuario'];
 

	echo"<div id=usuario>";
	  echo "<p>LogIn: $usuario";
	  echo"<p><A href='/sesion/view/logOut.php'>LogOut</a>";
    echo"</div>";

?>

<html>
<head>
<title>Práctica PHP - MVC </title>
<link rel="stylesheet" type="text/css" href="view/mystyles.css">
</head>
<body>
    <h2>PHP CRUD</h2>
    <div>
        <ul class="menu-list">
            <li><a href="/sesion/view/altaUsuario.php">Ingresar Usuario</a></li>
            <li><a href="/sesion/index.php?action=Listar-Usuarios">Modificar/eliminar usuarios</a></li>
        </ul>
    </div>
    