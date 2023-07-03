<!DOCTYPE html>
        
     
        <?php


?>
    
    <table>

        <thead>
            <tr>
                <td>Usuario</td>
                <td>DNI</td>
                <td>Clave</td>
            </tr>
        </thead>

        <tbody>
            <?php

                foreach ($usuarios as $user) {
                    echo "<tr>";
                    echo "<td>". $user['nombre'] ."</td>";
                    echo "<td>". $user['dni'] ."</td>";
                    echo "<td>". $user['clave'] ."</td>";
                    $dni_user=$user['dni'];
                    $nombre_user=$user['nombre'];
                    $clave_user=$user['clave'];
                    echo "<td><a href='/sesion/view/modifi.php?dni=$dni_user&nombre=$nombre_user&clave=$clave_user&'><img src='view/modificar.png' width='30' height='30'></a></td>";
                    echo "<td><a href='/sesion/index.php?action=Eliminar&dni=$dni_user'><img src='view/eliminar.png' width='30' height='30'></a></td>";
                    echo "</tr>";
                }

            ?>
        </tbody>

    </table>

</body>
</html>