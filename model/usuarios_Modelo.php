<?php
	
	require_once('conexion.php');

	 function getUsers(){
        $query = ejecutarQuery('SELECT nombre, clave, dni  FROM usuarios');
         //hago una consulta SQL, y el resultado 
         // se lo asigno a la variable query
        $retorno = [];

        $i = 0;
        if(!empty($query)){
        foreach($query as $fila){
            $retorno[$i] = $fila;
            $i++;
        }
       
        return $retorno;
     }
   }
   
	function ejecutarQuery($consulta)	
    {
       $conn = conectar();
       $resultado = mysqli_query($conn,$consulta);
       if (mysqli_query($conn,$consulta)){
        echo "<br>Operación realizada";
        }
       else
       {
         echo "Error: ".mysqli_error($conn);
       }
       return $resultado;
    }
    
    function login($consulta)	
    {
       $conn = conectar();
       $resultado = mysqli_query($conn,$consulta);
       $cantidad = mysqli_num_rows($resultado);
       if ($cantidad>0){
        echo "<br>usuario existente";
        }
       else
       {
         echo "Usuario no existe";
       }
       return $cantidad;
    }

   function agregarUsuario($dni, $nombre, $clave){
			
			$consulta = "INSERT INTO `usuarios` (`nombre`, `clave`, `dni`) VALUES ('$nombre', '$clave', '$dni')";
		
			$resultado = ejecutarQuery($consulta);
			
	}
		
		function modificar($dni, $nombre, $clave){
			
			$consulta = "UPDATE `usuarios` SET `nombre` = '$nombre', `clave` = '$clave' WHERE `usuarios`.`dni` = $dni";
			
			$resultado = ejecutarQuery($consulta);
		}
		
		function eliminar($dni){
			
		    $consulta = "DELETE FROM `usuarios` WHERE `usuarios`.`dni` = $dni";
		    
		    $resultado = ejecutarQuery($consulta);
			
		}
		
		function get_usuario($dni)
		{
			$sql = "SELECT * FROM usuarios WHERE dni='$dni' LIMIT 1";
			

			return $row;
		}

?>