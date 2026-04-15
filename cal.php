<?php
error_reporting(E_ALL);
ini_set('display_error', 1);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="enter first number">
        <br><br>
        <input type="number" name="num2" placeholder="enter second number">
        <br><br>

        <button type="submit" name="add">add</button>
        <button type="submit" name="sub">sub</button>
        <button type="submit" name="multiply">multiply</button>
        <button type="submit" name="division">division</button>
    </form>


</body>

</html>

<?php
if (isset($_SERVER["REQUEST_METHOD"]) == $_POST) {
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];

    if (isset($_POST['add'])) {
        echo  "RESULT:" . $number1 + $number2;
    }
    if (isset($_POST['sub'])) {
        echo "result:" . $number1 - $number2;
    }
    if (isset($_POST['multiply'])) {
        echo "result:" . $number1 * $number2;
    }
    if (isset($_POST['division'])) {
        if ($number2 != 0) {
            echo "result:" . $number1 / $number2;
        } else {
            echo "can not devided by zero";
        }
    }
}


?>