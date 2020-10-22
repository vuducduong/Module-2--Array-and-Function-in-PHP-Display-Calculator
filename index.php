<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        select {
            width: 157px;
        }
    </style>
</head>
<body>
<form method="post">
    <table>
        <caption><h1>CALCULATOR</h1></caption>
        <tr>
            <td>Number 1:</td>
            <td><input type="text" name="one"></td>
        </tr>
        <tr>
            <td>Choose</td>
            <td><select name="operator">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="multiply">x</option>
                    <option value="divisor">/</option>
                </select></td>
        </tr>
        <tr>
            <td>Number 2:</td>
            <td><input type="text" name="two"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Calculate"></td>
        </tr>
    </table>
</form>
<h2>Result:</h2>
<?php
include_once "Calculator.php";
include_once "MyException.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_REQUEST["one"];
    $y = $_REQUEST["two"];
    $operator = $_POST["operator"];
    $hydra = new Calculator($x, $y);
    try {
       echo $hydra->calculate($operator);
    }catch (MyException $e) {
        echo $e->getMsg();
    }catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>


</body>
</html>

