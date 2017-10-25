<?php

namespace balance;

class Balance
{
    function check_balance($str)
    {
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
                    return $i;
                }
            }
        }
        if (count($pos_open) == 0) {
            // string is balanced
            return "-1";
        } else {
            // string is UNbalanced. Print position of first unbalanced open-brace
            return $pos_open[0];
        }
    }
}