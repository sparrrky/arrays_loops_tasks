<?php
//Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива.
// Запишите ее в переменную $result. [5 баллов]
$result = 0;
$arr = array (1, 20 ,15 ,17 ,24 ,35);
foreach ( $arr as $elem)
{
    $result = $result + $elem;
}
    echo $result;
?>