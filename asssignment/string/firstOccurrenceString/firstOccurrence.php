<?php


//Time Complexity O(n * m) 
//Space Complexity O(1)

function strString($haystack, $needle) {
    $index = -1;
    $constNumber = 10000;
    $needleLength = strlen($needle);
    $haystackLength = strlen($haystack);

    // Early returns for edge cases
    if ($needleLength == 0 || $haystackLength < $needleLength) {
        return $index;
    }

    if ($needle === $haystack) {
        return 0;
    }

    $needleVal = 0;
    for ($i = 0; $i < $needleLength; $i++) {
        $needleVal += ord($needle[$i]) * $constNumber;
    }

    for ($i = 0; $i <= $haystackLength - needleLength; $i++) {
        $val = 0;
        $str = '';

        for ($j = 0; $j < $needleLength; $j++) {
            $val += ord($haystack[$i + $j]) * $constNumber;
            $str .= $haystack[$i + $j];
        }

        if ($val == $needleVal && $str === $needle) {
            $index = $i;
            break;
        }
    }

    //echo $str . ' ' . $index;
    return $index;
}

$index = strString('sadbutsad', 'sad');
//$index = strString('codemama', 'ostad');
//$index = strString('hello', 'll');
echo $index;

?>
