<?php 
require_once 'connect.php'; 
$select = mysqli_query($connect, "SELECT * FROM `tst_table`");
$select = mysqli_fetch_all($select);
?>  
<!DOCTYPE html>
<html lang='ru'>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
    <H2>Записи в таблице</H2>
    <table class="table">
        <tr class="table-primary">
            <th >Айди</th>
            <th  >Число 1</th>
            <th  >Имя</th>
            <th  >Число 2</th>
            <th>&#9998</th>
            <th>&#10006</th>
        </tr>
        <?php
        foreach($select as $item){
        ?>
        <tr>
            <td class="table-secondary"><?= $item[0] ?></td>
            <td class="table-secondary"><?= $item[1] ?></td>
            <td class="table-secondary"><?= $item[2] ?></td>
            <td class="table-secondary"><?= $item[3] ?></td>
            <td><a href="vendor/update-form.php?id=<?= $item[0] ?>&name=<?= $item[1] ?>&summ=<?=$item[2]?>&tel=<?= $item[3] ?>">Обновить</a></td>
            <td><a href="vendor/delete-item.php?id=<?= $item[0] ?>">Удалить</a></td>
        </tr>
        <?php 
        }
        ?>
    </table>
    <div class="mb-3">
    <H2>Добавить запись</H2>
        <form action="vendor/add.php" method="post">
            <p>Имя</p>
            <input class="form-control" type="text" name="name" id="" placeholder="Ведите Имя">
            <p>Сумма</p>
            <input class="form-control" type="double" name="summ" id="" placeholder="Ведите сумму">
            <p>Телефон</p>
            <input class="form-control" type="number" name="tel" id="" placeholder="Ведите Тел">
            <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Отправить</button>
    </div>
        </form>
    </div>
</div>
</body>

</html>