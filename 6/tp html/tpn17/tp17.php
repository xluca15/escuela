<?php
    $res = rand(1, 100);
    echo "Numero aleatorio: " . $res . "<br/>";
    if($res > 50){
        echo "Es mayor a 50";
    }else{
        echo "No es mayor a 50";
    }
?>