<?php

require_once('../model/usuarios_Modelo.php');



$usuarios = getUsers();

require_once('../view/V_verUsuarios.php');

?>
