<?php
/* Нарисуйте пирамиду, как показано на рисунке, используя цикл for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
[17 баллов] */
//Цикл while:
$str = '';
$i = 0;
while ($i <= 4)
{
    $i++;
    $str .= 'xx';
    echo $str.'<br>';
}
?>