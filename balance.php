<?php
// script to find if a string is balanced

require 'Lib/Balance.php';


if (empty($argv[1])) {
    echo "Please provide an input string as a first parameter. Ex.: php balance.php 'string_to_{check}}' should " .
        "output: 17";
    exit();
}

$str = $argv[1];
$Balance = new Balance\Balance();

echo $balanced = $Balance->check_balance($str);




