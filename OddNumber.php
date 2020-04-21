<?php
/**
 * get the number which occurs odd times in the source array
 *
 * @param $arrValues array
 * @return int
 */
function getOddNumber($srcValues) {
    if(empty($srcValues)) return 'Array is empty';
    $new_array = [];
    foreach ($srcValues as $key => $num) {
        $new_array[$num][] = $key; 
    }

    foreach ($new_array as $key => $num){
        if(count($num) % 2 != 0) return $key;
    }
}
var_dump(getOddNumber([0, 0, 0, 0, 3, 3, 2, 1, 4, 4, 1]));