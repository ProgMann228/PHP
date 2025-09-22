<?php

$mob=[];
$max=0;
$max_b='';
while(1) {
    $input = readline();
    if ($input === "" || $input === false) break;
    [$data,$brand,$model,$col,$income]=explode(", ", $input,5);

    $col = (int)$col;
    $income = (int)$income;

    if (!isset($mob[$brand])) {
        $mob[$brand] = [0,0];
    }
    $mob[$brand][1]+= $income;
    $mob[$brand][0]+= $col;

}

foreach($mob as $brand=>$data){
    if($max<$data[1]) {$max_b=$brand;}
    echo $brand . ": общая выручка " . $data[1] . ", средняя выручка на единицу " . round($data[1]/$data[0]) . PHP_EOL;
}
echo "Марка с наибольшей выручкой: ".$max_b;


?>