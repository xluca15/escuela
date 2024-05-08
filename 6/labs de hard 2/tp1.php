<?php 
    $db = syqli_connect('localhost','root','','test');
    $sql = "create database sensor";
    mysqli_query($db,$sql);
    mysqli_select_db($db,"sensor");
    $sql = "create table datos (id int auto_increment primary key, humedad float, fecha timesTamp, temperatura float)";
    $mysqli_query($db, $sql);
    $hum = $_POST ['humedad'];
    $temp = $_POST ['temperatura'];
    $sql = "insert into datos(null, $hum; currentTimesTamp, $temp)";
?>