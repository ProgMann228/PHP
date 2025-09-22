<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum=0;
$i=0;$j=0;


foreach ($array as $value) {
        $sum+=$value;
        if ($value % 2 == 0) {
            $i+=1;
        }
        else $j+=1;
    }
echo "Количество четных чисел: ".$i."<br>",
"Количество нечетных чисел: ".$j."<br>",
"Среднее значение: ".$sum/count($array);

?>