<?php 
require_once '../connect.php'; 
$id = $_GET['id'];
$delete = mysqli_query($connect, "DELETE FROM `tst_table` WHERE `id`='$id'");
header('Location: ../index.php');
?>