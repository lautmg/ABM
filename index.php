
                 <?php
                  

            require_once('view/headerSession.php');
            require_once('model/usuarios_Modelo.php');


if (!empty($_GET["action"])) {
    $action = $_GET["action"];
}
else{  $action = "Principal";}
switch ($action) {
    
    case "Agregar-Usuario":
        if (isset($_POST['dni'])) {
            $nombre = $_POST['nombre'];
            $dni = $_POST['dni'];
            $clave = $_POST['clave'];
          	echo $clave;
          	
            $respuesta= agregarUsuario($dni, $nombre, $clave);
            if ($respuesta) {
                echo"trivi";
                $response = array(
                    "message" => "Hubo un problema agregando un Usuario",
                    "type" => "error"
                );
            } else {
                echo"trivi";
                echo '<script type="text/javascript">
                          alert("Probando vamos a proceder a redireccionar");
                          window.location.assign("controller/Controlador-Usuario.php");
                          </script>';
                         echo 'Registro ingresado';
                         exit;
            }
          }
        break;
    
    case "Listar-Usuarios":
       //require('model/usuarios_Modelo.php');
       $usuarios = getUsers();
       require('view/V_verUsuarios.php');
     
       break;
       
    case "modificar":
        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $clave = $_POST['clave'];
        modificar($dni, $nombre, $clave);
        break;
       
    case "Eliminar":
        $usuario_dni = $_GET["dni"];
       
        eliminar($usuario_dni);
        break;
    case "Principal":
         echo '<script type="text/javascript">
                          alert("Redireccionando a menú principal");
                          window.location.assign("view/principal.php");
                          </script>';
                       
                         exit;
        break;
    default:
        echo '<script type="text/javascript">
                          alert("Redireccionando a menú principal");
                          window.location.assign("view/principal.php");
                          </script>';
                    
                         exit;
       break;
}
    ?>
                
                
            </body>
        </html>
        
    
        
    

        
    

