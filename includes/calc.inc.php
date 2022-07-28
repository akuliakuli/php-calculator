<?php
  declare(strict_types = 1);
  include 'includes.inc.php';

  $firstNum = $_POST['num1'];
  $secondNum = $_POST['num2'];
  $operation = $_POST['oper'];

  $calc = new Calc($operation,(int)$firstNum,(int)$secondNum);
    
  
  try{
        echo $calc->calculate();
    }catch(TypeError $e){
        echo $e;
    }