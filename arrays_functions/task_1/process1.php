

<?php

function capMe(array $arr):array{
    foreach ($arr as &$el){
        //echo $el;
        $first=strtoupper($el[0]);
        $last=strtolower($el[strlen($el)-1]);
        if(strlen($el)>2) $mid=strtolower(substr($el,1,strlen($el)-2));
        else if(strlen($el)===1) {
            $mid='';
            $last='';
        }
        else $mid='';

        $el=$first.$mid.$last;
    }
    unset($el);
    return $arr;

}
?>

