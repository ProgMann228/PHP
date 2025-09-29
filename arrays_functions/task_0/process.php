<?php

function counting($string){
    $c=0;
    $string = strtolower($string);
    $array=str_split($string);
    $array=array_count_values($array); #возвращает ассоциативный массив
    foreach ($array as $letter=>$count){
        if($count>1) $c++;

    }
    return $c;
}

if (isset($_GET['submit'])) {
    $string=$_GET['string'];
    if($string==='') {
        header('location: form.php?error=1');
        exit;
    }
    echo counting($string);
}


?>
