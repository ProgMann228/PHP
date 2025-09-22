<?php

$peng=[];
while(1){
    $input=readline();
    if($input==="" || $input===false) break;
    [$c,$spec]=explode(" ", $input,2);

    if(isset($peng[$spec])){
        $peng[$spec]+=(int)$c;
    }
    else{
        $peng[$spec]=$c;
    }
}
#print_r($peng);
$max=0;
$max_s='';
foreach($peng as $k=>$v){
    echo $k.": ".$v."\n";
    if($max<$v) { $max=$v; $max_s=$k; }
}
echo "Тип пингвина с наибольшей популяцией: ", $max_s;
?>