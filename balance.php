<?php

// script to find if a string is balanced

if (empty($argv[1])) {
    echo "Please provide an input string as a first parameter. Ex.: php balance.php 'string_to_{check}}' should " .
        "output: 17";
}
$str = $argv[1];

//array to store the positions of the opening braces
$pos_open = [];

for ($i=0; $i<strlen($str); $i++) {
    $chr = $str[$i];

    if ($chr == '{') {
        array_push($pos_open, $i);
    } elseif ($chr == '}') {
        if (count($pos_open) > 0) {
            array_pop($pos_open);
        } else {
            // string is unbalanced. we print the position of the erroneous closing brace and exit.
            echo $i;
            exit;
        }
    }

}

if (count($pos_open) == 0) {
    // string is balanced
    echo "-1";
} else {
    // string is UNbalanced. Print position of first unbalanced open-brace
    echo $pos_open[0];
}
