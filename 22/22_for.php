<?php
/* Нарисуйте пирамиду, как показано на рисунке, используя цикл for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
[17 баллов] */
//Цикл for:
$str = '';
for ( $i = 1; $i <=5; $i++)
{
    $str .= 'xx';
    echo $str .'<br>';
}
?>