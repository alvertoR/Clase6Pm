<?php

/*
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$suma = $_GET['num1'] + $_GET['num2'];
*/

//isset(), lo que hace es decir si llego algo dependiendo del metodo
/*
if(isset($_GET['patata'])){

    $patata = $_GET['patata'];

    echo $patata;
}
*/
/*
if(isset($_POST['patata'])){
    $patata = $_POST['patata'];
     
    echo $patata;
}
*/

if(isset($_POST['numero1'])){
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    /*
    if(empty($numero2)){
        echo "No hay datos en el input número  2";
    }

    if(strlen($numero2) < 0){
        echo "Aquí tampoco hay nada...";
    }*/

    $suma     = $numero1 + $numero2;
    $resta    = $numero1 - $numero2;
    $division = $numero1 / $numero2;

    echo "La suma es ".$suma." , la resta es ".$resta." , la división es ".$division;


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="numero1" id=""><br>
        <input type="text" name="numero2" id=""><br> 
        <input type="submit" value="Send">
    </form>
</body>
</html>
