<?php
/* Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано ниже:
1,
2,
3,
4,
5,
6,
7,
8,
9 */
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$i = 0;
$str = '';
foreach ($arr as $elem)
{
    if ($i == 1)
    {
        $str = $elem;
    }
    else
    {
        $str .= $elem.','.'<br>';
    }
}
echo $str;
?>