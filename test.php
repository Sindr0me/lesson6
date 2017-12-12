<?php
$test_dir = "./tests/test";
$test_id = $test_dir.$_GET["id"].".json";
$json_file = file_get_contents($test_id);
$json_array = json_decode($json_file, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="list.php">Список тестов</a></li>
        <li><a href="admin.php">Загрузить тест</a></li>
    </ul>
</nav>

<?php
echo "<pre>";
var_dump($json_array);

$result=[];
?>

    <form action="" method="POST">
        <h1><?php echo $json_array[0]['question'] ?></h1>
        <h2>Варианты ответов:</h2>
        <?php foreach ($json_array[0]['answers'] as $values) { ?>
        <p> <?php echo $values; ?> </p>
        <?php } ?>
        Напишите номер ответа: <input type="text" name="question1" value=" "><br>
        <input type="submit" value="Ответить">
    </form>

    <form action="" method="POST">
        <h1><?php echo $json_array[1]['question'] ?></h1>
        <h2>Варианты ответов:</h2>
        <?php foreach ($json_array[1]['answers'] as $values) { ?>
        <p> <?php echo $values; ?> </p>
        <?php } ?>
        Напишите номер ответа: <input type="text" name="question2" value=" "><br>
        <input type="submit" value="Ответить">
    </form>    

    <form action="" method="POST">
        <h1><?php echo $json_array[2]['question'] ?></h1>
        <h2>Варианты ответов:</h2>
        <?php foreach ($json_array[2]['answers'] as $values) { ?>
        <p> <?php echo $values; ?> </p>
        <?php } ?>
        Напишите номер ответа: <input type="text" name="question3" value=" "><br>
        <input type="submit" value="Ответить">
    </form>

</body>
</html>