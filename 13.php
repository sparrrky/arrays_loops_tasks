<table border="2"><tr>
<?php
//Вывести таблицу умножения. [10 баллов]
for ($i=1;$i<=9;$i++)
{
    echo '<td>';
    for ($k = 1; $k <= 9; $k++)
    {
        echo $i . 'x' . $k . '=' . ($i * $k).'<br>';
    }
    echo '</td>';
}
?>
</tr></table>