<?php
require_once '../connect.php';
require_once 'update-form.php'; 
echo "<pre>";
print_r($_POST);
echo "</pre>";

$id = $_POST['id'];
$name = $_POST['name'];
$summ = $_POST['summ'];
$tel = $_POST['tel'];
$query = "UPDATE `tst_table` SET `name`='$name',`summ`='$summ',`tel`='$tel' WHERE `id`='$id'";
$select = mysqli_query($connect, $query);
header('Location: ../index.php');

?>