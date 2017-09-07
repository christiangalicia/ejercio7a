<?php
include_once './Moneda.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $moneda = new Moneda("$10.00");
        $moneda->mostrarValor();
        ?>
        <?php
        echo "hola";
        ?>
    </body>
</html>
