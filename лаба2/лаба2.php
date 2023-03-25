<h1>Задание 1</h1>

<?php
$very_bad_unclear_name = "15 chicken wings";

$order =& $very_bad_unclear_name;
$order .= "is very tasty!";

echo "\nYour order is: $very_bad_unclear_name.";
?>

<h1>Задание 2</h1>

<?php
$int = 8;
echo "$int";
echo "\n";
$float = 4.0;
echo "$float";
echo "\n";
echo $int + $float;
echo "\n";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;
?>

<h1>Задание 11</h1>

<?php
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;
?>

<h1>Задание 12</h1>

<?php
echo 8**2;
?>

<h1>Задание 13</h1>

<?php
$my_num = 100;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
?>

<h1>Задание 14</h1>

<p>Работа с %</p>

<?php
$a = 10;
$b = 3;
echo $a % $b;
if($a % $b == 0)
    echo "\n Делится";
else
{
    echo "\n Делится с остатком";
    echo "\n";
    echo $a % $b;
}

?>

<p>Работа со степенью и корнем</p>

<?php
$st = pow(2, 10);
echo $st;
echo "\n";
echo sqrt(245);
echo "\n";

$array = Array(4, 2, 5, 19, 13, 0, 10);
$sum_sqrts = 0;
foreach ($array as $value)
    $sum_sqrts += pow($value,2);
echo sqrt($sum_sqrts);
?>

<p>Работа с функциями округления</p>

<?php
echo round(sqrt(379), 0);
echo "\n";
echo round(sqrt(379), 1);
echo "\n";
echo round(sqrt(379), 2);
echo "\n";
$array_587 = Array('floor', 'ceil');
$array_587['floor'] = floor(sqrt(587));
$array_587['ceil'] = ceil(sqrt(587));
?>

<p>Работа с min и max</p>

<?php
$max = max(4, -2, 5, 19, -130, 0, 10);
echo "\n $max";
$min = min(4, -2, 5, 19, -130, 0, 10);
echo "\n $min";
?>

<p>Работа с рандомом</p>

<?php
echo rand(1,100);
$array_rand = Array();
for($i = 0; $i < 10; $i++)
    $array_rand[$i] = rand();
?>

<p>Работа с модулем</p>

<?php
$a = 5;
$b = 25;
echo abs($a - $b);
$array_abs = array(1, 2, -1, -2, 3, -3);
for($i = 0; $i < count($array_abs); $i++)
    if($array_abs[$i] < 0)
        $array_abs[$i] = abs($array_abs[$i]);
?>

<p>Общее</p>

<?php
$number = 30;
$array = array();
$count = 0;
for($i = 1; $i < $number; $i++)
    if($number % $i == 0)
        {
            $array[$count] = $i;
            $count++;
        }

echo $number;
foreach($array as $value)
        echo "\n $value";

$array_2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$count_2 = 0;
$sum = 0;
foreach($array_2 as $value)
{
    $sum += $value;
    $count_2++;
    if($sum > 10)
    {
        echo "\n$count_2";
        break;
    }
}
?>

<h1>Задание 15</h1>

<?php
function printStringReturnNumber()
{
    echo "Возвращаемое значение: ";
    return rand();
}
$my_num = printStringReturnNumber();
echo $my_num;
?>

<h1>Задание 16</h1>

<?php
function increaseEnthusiasm($a)
{
    return $a .= "!";
}
$b = "Hello world";
echo increaseEnthusiasm($b);

function repeatThreeTimes($a)
{
    $j = $a;
    for($i = 0; $i < 2; $i++)
        $j .= $a;
    return $j;
}
echo "\n";
echo repeatThreeTimes($b);
echo "\n";
echo repeatThreeTimes(increaseEnthusiasm($b));

function cut($a, $d = 10)
{
    $j = "";
    for($i = 0; $i < $d; $i++)
        $j .= $a[$i];
    return $j;
}
echo "\n";
echo cut(repeatThreeTimes($b), 15);

$number_functions = 37;
function sumNum($a)
{
    $arr = str_split($a, 1);
    $result = array_sum($arr);
    if($result > 9)
        return sumNum($result);
    else
        return $result;
}

echo "\n";
echo sumNum($number_functions);
?>

<h1>Задание 17</h1>

<?php
$array__arrays = array();
$d = 10;
for($i = 0; $i < 10; $i++)
{
    $array__arrays[$i] = "";
    for($j = 0; $j < $i+1; $j++)
    {
        $array__arrays[$i] .= "x";
    }
}
for($i = 0; $i < count($array__arrays); $i++)
    echo $array__arrays[$i] . "\n";


function arrayFill($a, $b = 5)
{
    $arr = array();
    for($i = 0; $i < $b; $i++)
    {
        $arr[$i] = "";
        $arr[$i] .= $a;
    }
    return $arr;
}
$arr1 = arrayFill('x',5);
for($i = 0; $i < count($arr1); $i++)
    echo $arr1[$i] . "\n";


$array_functions_2 = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
for($i = 0; $i < count($array_functions_2); $i++)
{
    $sum += array_sum($array_functions_2[$i]);
}
echo $sum . "\n";


$arr2 = array();
$count1 = 0;
for($i = 0; $i < 3; $i++)
{
    $arr2_help = array();
    for($j = 0; $j < 3; $j++)
    {
        $arr2_help[$j] = ++$count1;
        echo $arr2_help[$j] . "\n";
    }
    $arr2[$i] = $arr2_help;
}


$arr3 = [2,5,3,9];
$result = $arr3[0] * $arr3[1] + $arr3[2] * $arr3[3];
echo $result . "\n";


$user = array(
    'name' => 'Simon', 
    'surname' => 'Peskov', 
    'patronymic' => 'Olegovich');
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'], "\n", "\n";


$date =array (
    'year' => '2023', 
    'month'=>'3' , 
    'day'=>'24');
echo $date['year'],'-',$date['month'], "-",$date['day'], "\n", "\n";


$arr4 = ['a', 'b', 'c', 'd', 'e'];
echo count($arr4) . "\n";

echo end($arr4), " ",prev($arr4);
?>

<h1>Задание 18</h1>

<?php
function more_than_ten($a, $b)
{
    if($a + $b > 10)
        return true;
    else
        return false;
}


function if_equal($a, $b)
{
    if($a === $b)
        return true;
    else
        return false;
}


$test = rand(0,1);
if(!$test)
    echo "верно \n";


echo "\n";
$age = rand (1, 150);
echo $age, " ";
if ($age > 99 || $age < 10){
    if ($age >99)
        echo'Число больше 99';
     else
        echo 'Число меньше 10';
}
else
{
  $arr = str_split($age, 1);
  $c = array_sum($arr);
  if ($c <= 9)
    echo 'Cумма цифр однозначна';
  else
    echo 'Cумма цифр двузначна';
}


$arr5 = [1,6,5];
if(count($arr5) == 3)
    echo "\n" . array_sum($arr5);
?>

<h1>Задание 19</h1>

<?php
$c = 'x';
$r = 1;
while ($r<=20)
{
  echo $c, "\n";
  $c = $c.'x';
  $r +=1;
}
?>

<h1>Задание 20</h1>

<?php
$arr6 = [5,67,8,2,45,3,1];
$result = array_sum($arr6) / count($arr6);
echo "\n" . $result;


echo "\n" . array_sum(range(1, 100));

echo "\n";

$arr7 = [4,7,63,77,23,1];
function sq($a)
{
    return sq($a);
}
$arr7 = array_map('sqrt', $arr7);
foreach($arr7 as $v)
    echo $v . "\n";


$arr8 = array_combine(range('a', 'z'), range(1, 26));
$c = 1;
while($c <= 26)
{
    echo key($arr8) . "\n" . current($arr8) . "\n";
    next($arr8);
    $c++;
}  


$a = "1234567890";
$arr9 = str_split($a, 2);
echo array_sum($arr9);
?>