<?php

function sumar($num1,$num2){
    $sum=$num1+$num2;
    return $sum;
}

function restar($num1,$num2){
    $res=$num1-$num2;
    return $res;
}

function multipli($num1,$num2){
    $multi=$num1*$num2;
    return $multi;
}

function dividir($num1,$num2){
    if($num2==0)
        echo "no se puede dividir por 0";
    else{
        $divi=$num1/$num2;
        return $divi;
    }
}

$num1=$_POST['num1'];
$num2=$_POST['num2'];
echo 'La suma es: '.sumar($num1,$num2);
echo '</br></br>';
echo 'La resta es: '.restar($num1,$num2);
echo '</br></br>';
echo 'La multiplicación es: '.multipli($num1,$num2);
echo '</br></br>';
echo 'La divición es: '.dividir($num1,$num2);

?>