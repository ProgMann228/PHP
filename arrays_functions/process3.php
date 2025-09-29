<?php
function uniqueInOrder($iterable){
    $ret=[];
    if (empty($iterable)) {
        return [];
    }

    if(is_array($iterable)){
        $size=count($iterable);
    }
    else {
        $iterable = str_split($iterable);
        $size = count($iterable);
        }

    for($i=0;$i<$size;$i++){
        $symbol=$iterable[$i];
        $ret[]=$symbol;
        while(($i+1)<count($iterable) && $iterable[$i+1]===$symbol){
            $i++;
        }

    }
    return $ret;
}
?>
