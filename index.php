<?php
    declare(strict_types = 1);
    include 'includes/includes.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
        <h1>SIMPLE PHP calculator</h1>
        <input type ="number" placeholder="firstNumber" name ="num1">
        <select name="oper">
            <option value="sum">ADD</option>
            <option value="sub">SUBSTRACTION</option>
            <option value="mul">MULTIPLY</option>
            <option value="div">DIVIDE</option>
        </select>
        <input type ="number" placeholder="secondNumber" name="num2">
        <button type="submit">SUBMIT</button>
    </form>
    <script src="script.js"> </script>
</body>
</html>