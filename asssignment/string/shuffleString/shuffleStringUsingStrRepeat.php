<?php

function restoreString($s, $indices) {
    $restored = str_repeat(' ', strlen($s)); 

    for ($i = 0; $i < strlen($s); $i++) {
        $restored[$indices[$i]] = $s[$i];
    }

    return $restored; 
}

// Example usage
$str = "dosta";
$indices =  [4,0,1,2,3];

$result = restoreString($str, $indices);
echo $result; // Output the result
