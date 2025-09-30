<?php

function get_info($fn){
    $obj = new ReflectionFunction($fn);
    $arr =[
        $obj->getNumberOfParameters(),
        $obj->getNumberOfRequiredParameters(),
        $obj->hasReturnType(),
        $obj->isClosure(),
        $obj->isInternal(),
        $obj->isUserDefined(),
    ];
    return $arr;
}


function multiply($a, $b) {
    return $a * $b;
}

print_r( get_info('multiply'));

?>