<?php
//Declaracion de variables
date_default_timezone_set('America/Lima');
    $numero1=$_POST['gaseosa'];
        $gaseosaAntes=(15*5)/100;
        $gaseosaDespues = 15 - $gaseosaAntes;
        $importe=$numero1*$gaseosaDespues;
        $descuento=($importe*7)/100;
        $caramelos=$numero1*2;
        $total=$importe - $descuento;
        echo "El precio de la gaseosa con descuento es: ".$gaseosaDespues;
        echo "<br> El importe de la compra es: ".$importe;
        echo "<br> El descuento por la compra es: ".$descuento;
        echo "<br> El total de caramelos son: ".$caramelos;
        echo "<br> El total a pagar es: ".$total;
?>