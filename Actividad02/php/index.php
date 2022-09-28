<?php
//Declaracion de variables
date_default_timezone_set('America/Lima');
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];
        $producto=$numero1 + $numero2;
        echo "El Resultado de la Operacion es :".$producto;
?>