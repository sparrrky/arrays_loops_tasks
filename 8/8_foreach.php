<?php
//Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
// С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.
// Циклы while и for. [13 баллов]
//Цикл foreach:
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $elem)
{
    echo $elem++.'-';
}
?>
