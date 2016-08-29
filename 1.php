<?php
// Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик. [3 балла]
$arr = array ('html', 'css', 'php', 'js', 'jq');
foreach ($arr as $elem)
{
    echo $elem.'<br>';
}
?>