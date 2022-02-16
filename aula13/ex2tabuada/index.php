<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action='tabuada.php'>
selecione o valor:
    <select name="num">
    <?php
    for($i=1;$i<=10;$i++) {
        echo "<option>$i</option>";
    }
    ?>
</select>
<input type="submit" name="calcular" value="calcular">
    </form>
</body>
</html>