<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Ingresar Valor 1:<br>   <input type="text" name="valor1" /><br />
        Ingresar Valor 2:<br>   <input type="text" name="valor2" /><br />
        Resultado :<br>
        <input type="submit" name="Suma" value="Suma">
    </form>
</body>
</html>
<?php
//Declaracion de variables
date_default_timezone_set('America/Lima');
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];
        $suma=$numero1 + $numero2;
        echo "El Resultado de la suma es :".$suma;
?>