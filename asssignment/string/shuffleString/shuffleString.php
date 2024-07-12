<?php

// Time Complexity: O(n²)
// Space Complexity: O(n)

function restoreString($s, $indices) {
    $shubStr = '';
    for ($i = 0; $i < strlen($s); $i++) {
        for ($j = 0; $j < count($indices); $j++) {
                if ($i == $indices[$j]) {
                    $shubStr .= $s[$j];
                    break;
                }
        }
    }
    echo $shubStr; die;
        
}
$str = "codeleet";
$indices = [4,5,6,7,0,2,1,3];

restoreString($str, $indices);