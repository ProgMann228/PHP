<?php
$books=[];
while(1){
    $input=readline();
    if($input==="" || $input===false){break;}
    $books[]=$input;
}
#print_r($books);

$c=0;
foreach($books as $book){
    $c++;
    $data=explode(" ",$book);
    $days=$data[0];
    $price=$data[1];
    echo "Возврат ",$c;
    if($days<=7){
        $bill=0.05*$price*$days;
    }
    else{
        $bill=0.05*$price*7 + ($days-7)*0.1*$price;

    }
    echo ": штраф ",$bill,"\n";

}
?>