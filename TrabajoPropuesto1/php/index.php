<?php
//Declaracion de variables
date_default_timezone_set('America/Lima');
    $numero1=$_POST['hijos'];
    $numero2=$_POST['importe'];
        $hijos=$numero1*50;
        $comision=($numero2*7.5)/100;
        $sueldoBruto=600 + $hijos + $comision;
        $descuento=($sueldoBruto*11)/100;
        $sueldoNeto= $sueldoBruto - $descuento;
        echo "La comision es: ".$comision;
        echo "<br> Bonificacion por hijos es: ".$hijos;
        echo "<br> Sueldo Bruto es: ".$sueldoBruto;
        echo "<br> El sueldo neto es: ".$sueldoNeto;
?>