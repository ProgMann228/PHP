<?php
$orders=[];
while(1){
    $input=readline();
    if($input==='' || $input===false){
        break;
    }
    else $orders[]=$input;
}
#print_r($orders) ;

$c=0;
foreach($orders as $order){
    $c++;
    $data=explode(" ",$order);
    $num=$data[0];
    $price=$data[1];
    echo "Заказ ",$c;
    if($num%2==0 && $price>=1000){
        echo ": скидка\n";
    }
    else{
        echo ": без скидки\n";
    }
}

?>