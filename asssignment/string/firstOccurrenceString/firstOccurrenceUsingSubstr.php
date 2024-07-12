<?php


//Time Complexity O(n * m) 
//Space Complexity O(1)

function strString($haystack, $needle) {
    $index = -1;
    $needleLength = strlen($needle);
    $haystackLength = strlen($haystack);

    // Early returns for edge cases
    if ($needleLength == 0 || $haystackLength < $needleLength) {
        return $index;
    }

    for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
        if (substr($haystack, $i, $needleLength) === $needle) {
            $index = $i;
            break;
        }
    }

    return $index;
}

//$index = strString('sadbutsad', 'sad');
//$index = strString('codemama', 'ostad');
$index = strString('hello', 'll');
echo $index;

?>
