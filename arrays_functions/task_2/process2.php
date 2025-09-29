<?php
function square($b){
    $c=sqrt((float)$b);
    return $c==(int)$c;
}

function is_square($a)
{
    if (is_array($a)) {
        if(count($a)===0) return null;
        foreach ($a as $el) {
            $res=is_square($el);
            if($res===false)return false;
        }
        return true;
    }
    else return square($a);

}


?>


