<?php
//Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
//$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
//$en = array('green', 'red','blue');
//$ru = array('зеленый', 'красный', 'голубой');
//[11 баллов]
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$i = 0;
foreach ($arr as $key => $elem)
{
    $en [$i] = $key;
    $ru [$i] = $elem;
    $i++;
}
echo '<pre>';
    print_r($en);
    print_r($ru);
echo '</pre>';
?>