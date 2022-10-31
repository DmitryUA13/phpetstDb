<?php 
require_once '../connect.php'; 
$prod_id = $_GET['id'];
$prod_query = mysqli_query($connect, "SELECT * FROM `tst_table` WHERE `id`='$prod_id'");
$prod_query = mysqli_fetch_assoc($prod_query);
//print_r($select['name']);
?>

<!DOCTYPE html>
<html lang='ru'>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Изменить запись</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    .wrapper{
        width: 50%;
        margin-left: 50px;
    }
    button{
        margin-top: 20px;
    }
</style>
</head>

<body>

<div class="wrapper">
    
    <div class="mb-3">
        <h2>Изменить товар с ID = <?= $prod_id ?></h2>
        <form action="update-req.php" method="post">
            <input type="hidden" name="id" value="<?= $prod_id ?>">
            <p>Имя: <?= $name?></p>
            <input class="form-control" type="text" name="name" id="" placeholder="<?= $prod_query['name']?>">
            <p>Сумма: <?= $summ?></p>
            <input class="form-control" type="number" name="summ" id="" placeholder="<?= $prod_query['summ']?>">
            <p>Телефон: <?= $tel?></p>
            <input class="form-control" type="number" name="tel" id="" placeholder="<?= $prod_query['tel']?>">
            <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Обновить</button>
    </div>
        </form>
    </div>
</div>

</body>

</html>