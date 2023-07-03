<?php
function conectar()
{
$host="localhost";
$usuario="id18773741_lautaro";
$clave="H?GFzJNp-4F(DCk)";
$dbnombre="id18773741_admin";

//echo"Probando conectar a la BD";

$conn = mysqli_connect($host,$usuario,$clave,$dbnombre);//función para conectarme a la BD

if(mysqli_connect_errno())
  {
    echo "conexión NO establecida".mysqli_connect_error(); // Número de error en la conex.
  }
else
  {
     echo "Conexión establecida";// me pude conectar a la BD 
     }
return $conn;
}

  ?>