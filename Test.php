<?php
function ceilNumbers($array) {
    $output = array();

    foreach($array as $n) {
        array_push($output, sqrt( $n ));
    }

    return $output;
}

$arrayOfNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r( ceilNumbers($arrayOfNumbers) );