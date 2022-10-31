<?php 
require_once '../connect.php'; 
echo "<pre>";
print_r($_POST);
echo "</pre>";

$name = $_POST['name'];
$summ = $_POST['summ'];
$tel = $_POST['tel'];

mysqli_query($connect,"INSERT INTO `tst_table` (`name`, `summ`, `tel`) VALUES ('$name', '$summ', '$tel')");
header('Location: ../index.php');
?>
