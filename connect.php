<?php
$connect = mysqli_connect('localhost','root','','tstDb','3306');
if(!$connect){
    die('Пизда соединению!');
}
else{
    echo "Соединение есть!";
}
?>
