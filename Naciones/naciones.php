<?php
    include_once 'datos.php';

    echo "<table border=2>";

    foreach($datos as $value) {
        $ruta_bandera = "./banderas/{$value}.PNG";

        if(!file_exists($ruta_bandera)) {
            $ruta_bandera = "./banderas/not_found.PNG";
        }

        echo "<tr><td>$ruta_bandera</td><td><img src='{$ruta_bandera}'/></td></tr>";
    }

    echo "</table>";
?>