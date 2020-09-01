<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
include "Calculator.php";

$cal = new Calculator();
echo "4*1 = " .$cal-> multiply(4,1)."</br>";
echo "4+1 = ".$cal->add(4,1)."</br>";
echo "4-1 = ".$cal->substract(4,1)."</br>";
echo "4/1 = ".$cal->divide(4,1)."</br>";
?>