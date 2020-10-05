<?php
//Задание №1
/*$a = -2;
$b = 3;
if ($a >= 0 && $b >= 0) 
  echo $a - $b;
elseif ($a < 0 && $b < 0)
  echo $a * $b;
else
  echo $a +$b;*/

//Задание №2
/*$a = 3;
switch ($a) {
  case '1':
    echo '1 <br>';
    $a++;
  case '2':
    echo '2 <br>';
    $a++;
  case '3':
    echo '3 <br>';
    $a++; 
  case '4':
    echo '4 <br>';
    $a++; 
  case '5':
    echo '5 <br>';
    $a++;    
  case '6':
    echo '6 <br>';
    $a++; 
  case '7':
    echo '7 <br>';
    $a++;  
  case '8':
    echo '8 <br>';
    $a++; 
  case '9':
    echo '9 <br>';
    $a++;  
  case '10':
    echo '10 <br>';
    $a++;
  case '11':
    echo '11 <br>';
    $a++;
  case '12':
    echo '12 <br>';
    $a++; 
  case '13':
    echo '13 <br>';
    $a++; 
  case '14':
    echo '14 <br>';
    $a++;    
  case '15':
    echo '15 <br>';
    $a++; 
    break;
  default:
    echo 'что-то пошло не так...';
    break;
}*/

//Задание №3
/*function sum($a, $b){
  return $a + $b;
}

function sub($a, $b){
  return $a - $b;
}

function multi($a, $b){
  return $a * $b;
}

function div($a, $b){
  return $a / $b;
}
*/
//echo sum(2,3)."<br>";
//echo sub(2,3)."<br>";
//echo multi(2,3)."<br>";
//echo div(2,3)."<br>";

//Задание №4
/*function mathOperation($arg1, $arg2, $operation){
  switch ($operation) {
    case '+':
      $operation = sum($arg1, $arg2);
      echo "$operation";
      break;
    case '-':
      $operation = sub($arg1, $arg2);
      echo "$operation";
      break;
    case '*':
      $operation = multi($arg1, $arg2);
      echo "$operation";
      break;
    case '/':
      $operation = div($arg1, $arg2);
      echo "$operation";
      break;
    default:
      echo 'что-то пошло не так...';
  }

}
echo mathOperation(4,2,'*');
*/
//Задание №5
/*function power($val, $pow){
  if ($pow == 1) {
    return $val;
  }
  else{
    return $val * power($val, $pow - 1);
  }
}

echo power(2,4);
*/

//Задание №6
$hour = date('H');
$minute = date('i');
echo $hour." часа ".$minute." минут";
?>